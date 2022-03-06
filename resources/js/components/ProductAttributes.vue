<template>
    <div>
        <div class="tile">
            <h3 class="tile-title">Attributes</h3>
            <hr>
            <div class="tile-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="parent">Select an Attribute <span class="m-l-5 text-danger"> *</span></label>
                            <select id=parent class="form-control custom-select mt-15" v-model="attribute" @change="selectAttribute(attribute)">
                                <option :value="attribute" v-for="attribute in attributes" :key="attribute"> {{ attribute.name }} </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tile" v-if="attributeSelected">
            <h3 class="tile-title">Add Attributes To Product</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="values">Select an value <span class="m-l-5 text-danger"> *</span></label>
                        <select id=values class="form-control custom-select mt-15" v-model="value" @change="selectValue(value)">
                            <option :value="value" v-for="value in attributeValues" :key="value"> {{ value.value }} </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row" v-if="valueSelected">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="quantity">Quantity</label>
                        <input class="form-control" type="number" id="quantity" v-model="currentQty"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="price">Price</label>
                        <input class="form-control" type="number" id="price" v-model="currentPrice"/>
                        <small class="text-danger">This price will be added to the main price of product on frontend.</small>
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-sm btn-primary" @click="addProductAttribute()">
                        <i class="fa fa-plus"></i> Add
                    </button>
                </div>
            </div>
        </div>
        <div class="tile">
            <h3 class="tile-title">Product Attributes</h3>
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                        <tr class="text-center">
                            <th>Value</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="pa in productAttributes" :key="pa">
                            <td style="width: 25%" class="text-center">{{ pa.value}}</td>
                            <td style="width: 25%" class="text-center">{{ pa.quantity}}</td>
                            <td style="width: 25%" class="text-center">{{ pa.price}}</td>
                            <td style="width: 25%" class="text-center">
                                <button class="btn btn-sm btn-danger" @click="deleteProductAttribute(pa)">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import swal from 'sweetalert2';
    window.Swal = swal;
    const swalButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    });

    export default {
        name: "product-attributes",
        props: ['productid'],
        data() {
            return {
                productAttributes: [],
                attributes: [],
                attribute: {},
                attributeSelected: false,
                attributeValues: [],
                value: {},
                valueSelected: false,
                currentAttributeId: '',
                currentValue: '',
                currentQty: '',
                currentPrice: '',
            }
        },
        created: function() {
            this.loadAttributes();
            this.loadProductAttributes(this.productid);
        },
        methods: {
            loadAttributes() {
                let _this = this;
                axios.get('/admin/products/attributes/load').then (function(response){
                    _this.attributes = response.data;
                }).catch(function (error) {
                    console.log(error);
                });
            },
            loadProductAttributes(id) {
                let _this = this;
                axios.post('/admin/products/attributes', {
                    id: id
                }).then (function(response){
                    _this.productAttributes = response.data;
                }).catch(function (error) {
                    console.log(error);
                });
            },
            selectAttribute(attribute) {
                let _this = this;
                this.currentAttributeId = attribute.id;
                axios.post('/admin/products/attributes/values', {
                    id: attribute.id
                }).then (function(response){
                    _this.attributeValues = response.data;
                }).catch(function (error) {
                    console.log(error);
                });
                this.attributeSelected = true;
            },
            selectValue(value) {
                this.valueSelected = true;
                this.currentValue = value.value;
                this.currentQty = value.quantity;
                this.currentPrice = value.price;
            },
            addProductAttribute() {
                if (this.currentQty == null) {
                    swalButtons.fire({
                        title: 'Invalid Value',
                        text: 'Some values are missing.',
                        icon: 'error'
                    });
                }
                else if (this.currentPrice >= 1000000 || this.currentPrice < 0) {
                    swalButtons.fire({
                        title: 'Invalid Value',
                        html: 'Price value is invalid.<br> It should be between 0.00～999999.00',
                        icon: 'error'
                    });
                } else {
                    let _this = this;

                    axios.post('/admin/products/attributes/add', {
                        attribute_id: _this.currentAttributeId,
                        value:  _this.currentValue,
                        quantity: _this.currentQty,
                        price: _this.currentPrice,
                        product_id: _this.productid,

                    }).then (function(response){
                        if(response.data.message === 'error'){
                            swalButtons.fire({
                                title: 'Invalid Value',
                                html: 'Some values are missing.',
                                icon: 'error'
                            });
                        }
                        else{

                            _this.currentAttributeId = '';
                            _this.currentValue = '';
                            _this.currentQty = '';
                            _this.currentPrice = '';
                            _this.attributeSelected = false;
                            _this.valueSelected = false;
                            _this.attributeValues = [];
                            _this.attribute = {};
                            _this.value = {};
                            

                            swalButtons.fire({
                                //position: 'top-end',
                                icon: 'success',
                                title: 'Success!',
                                text: response.data.message,
                                showConfirmButton: false,
                                timer: 1000
                            });
                        }
                    }).catch(function (error) {
                        swalButtons.fire({
                            title: 'Invalid Value',
                            html: 'Some values are missing.',
                            icon: 'error'
                        });
                        console.log(error.reponse);
                    });
                    this.loadProductAttributes(this.productid);
                    
                }
            },
            
            deleteProductAttribute(pa) {
                swalButtons.fire({
                    title: 'Are you sure?',
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.key = this.productAttributes.indexOf(pa);
                        
                        let _this = this;
                        console.log(pa.id);
                        axios.post('/admin/products/attributes/delete', {
                            id: pa.id,
                        }).then (function(response){
                            if (response.data.status === 'success') {
                                _this.productAttributes.splice(_this.key, 1);
                                
                                swalButtons.fire({
                                    //position: 'top-end',
                                    icon: 'success',
                                    title: 'Success!',
                                    text: response.data.message,
                                    showConfirmButton: false,
                                    timer: 1000
                                });
                                //this.loadProductAttributes(this.productid);
                            } else {
                                swalButtons.fire({
                                    title: 'error',
                                    html: 'Your Product attribute not deleted!',
                                    icon: 'warning'
                                });
                            }
                        }).catch(function (error) {
                            console.log(error);
                        });
                    } else {
                        swalButtons.fire({
                            //position: 'top-end',
                            icon: 'info',
                            title: 'Action cancelled!',
                            showConfirmButton: false,
                            timer: 1000
                        });
                    }
                });

            }
        }
    }
</script>