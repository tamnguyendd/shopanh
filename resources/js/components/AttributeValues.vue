<template>
    <div id="">

        <div class="tile">
            <h3 class="tile-title">Attribute Values</h3>
            <hr>
            <div class="tile-body">
                <div class="form-group">
                    <label class="control-label" for="value">Value</label>
                    <input
                        class="form-control"
                        type="text"
                        placeholder="Enter attribute value"
                        id="value"
                        name="value"
                        v-model="value"
                    />
                </div>
                <div class="form-group">
                    <label class="control-label" for="price">Price</label>
                    <input
                        class="form-control"
                        type="number"
                        placeholder="Enter attribute value price"
                        id="price"
                        name="price"
                        v-model="price"
                    />
                </div>
            </div>
            <div class="tile-footer">
                <div class="row d-print-none mt-2">
                    <div class="col-12 text-right">
                        <button class="btn btn-success self_button" type="submit" @click.stop="saveValue()" v-if="addValue">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>Save
                        </button>
                        <button class="btn btn-success" type="submit" @click.stop="updateValue()" v-if="!addValue">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>Update
                        </button>
                        <button class="btn btn-primary self_button" type="submit" @click.stop="reset()" v-if="!addValue">
                            <i class="fa fa-fw fa-lg fa-check-circle"></i>Reset
                        </button>
                        <button class='btn btn-danger' v-on:click.stop='btnBackList()'><i class="fa fa-fw fa-lg fa-arrow-left"></i>Arttibutes List</button>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="tile">
            <h3 class="tile-title">Option Values</h3>
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Value</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- <tr v-for="value in values"> -->
                        <tr v-for="(value, key) in values" :key="value">
                            <td style="width: 25%" class="text-center">{{ key+1 }}</td>
                            <td style="width: 25%" class="text-center">{{ value.value}}</td>
                            <td style="width: 25%" class="text-center">{{ value.price}}</td>
                            <td style="width: 25%" class="text-center">
                                <div class="btn-group self_style" role="group" aria-label="Second group">
                                    <a class="btn btn-sm btn-primary" @click.stop="editAttributeValue(value)"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger" @click.stop="deleteAttributeValue(value)"><i class="fa fa-trash"></i></a>
                                </div>
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
        name: "attribute-values",
        props: ['attributeid'],
        data() {
            return {
                values: [],
                value: '',
                price: '',
                currentId: '',
                addValue: true,
                key: 0,
            }
        },
        created: function() {
            this.loadValues();
        },
        methods: {
            loadValues() {
                let attributeId = this.attributeid;
                let _this = this;
                axios.post('/admin/attributes/get-values', {
                    id: attributeId
                }).then (function(response){
                    _this.values = response.data;
                }).catch(function (error) {
                    console.log(error);
                });
            },

            saveValue() {
                if (this.value === '') {
                    swalButtons.fire({
                        title: 'Invalid Value',
                        text: 'Value for attribute is required.',
                        icon: 'error'
                    });
                } else if (this.price < 0 || this.price >= 1) {
                    swalButtons.fire({
                        title: 'Invalid Price',
                        html: 'Price for attribute is a decemal number <br> <strong>between [0 ~ 0.99]</strong>', // break line
                        icon: 'error'
                    });
                } else {
                    let attributeId = this.attributeid;
                    let _this = this;
                    axios.post('/admin/attributes/add-values', {
                        id: attributeId,
                        value: _this.value,
                        price: _this.price,
                    }).then (function(response){
                        _this.values.push(response.data);
                        _this.resetValue();
                        _this.reset();
                        swalButtons.fire({
                            //position: 'top-end',
                            icon: 'success',
                            title: 'Success!',
                            text: 'Value added successfully!',
                            showConfirmButton: false,
                            timer: 1000
                        });
                    }).catch(function (error) {
                        console.log(error);
                    });
                }
            },

            resetValue() {
                this.value = '';
                this.price = '';
            },

            reset() {
                this.addValue = true;
                this.resetValue();
            },

            editAttributeValue(value) {
                this.addValue = false;
                this.value = value.value;
                this.price = value.price;
                this.currentId = value.id;
                this.key = this.values.indexOf(value);
            },

            updateValue() {
                if (this.value === '') {
                    swalButtons.fire({
                        title: 'Invalid Value',
                        text: 'Value for attribute is required.',
                        icon: 'error'
                    });
                } else if (this.price < 0 || this.price >= 1) {
                    swalButtons.fire({
                        title: 'Invalid Price',
                        html: 'Price for attribute is a decemal number <br> <strong>between [0 ~ 0.99]</strong>', // break line
                        icon: 'error'
                    });
                } else {
                    let attributeId = this.attributeid;
                    let _this = this;
                    axios.post('/admin/attributes/update-values', {
                        id: attributeId,
                        value: _this.value,
                        price: _this.price,
                        valueId: _this.currentId
                    }).then (function(response){
                        _this.values.splice(_this.key, 1);
                        _this.resetValue();
                        _this.values.push(response.data);
                        _this.reset();
                        swalButtons.fire({
                            //position: 'top-end',
                            icon: 'success',
                            title: 'Success!',
                            text: 'Value updated successfully!',
                            showConfirmButton: false,
                            timer: 1000
                        });
                    }).catch(function (error) {
                        console.log(error);
                    });
                }
            },

            deleteAttributeValue(value) {
                swalButtons.fire({
                    title: 'Are you sure?',
                    text: "Once deleted, you will not be able to recover this attribute value!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        this.currentId = value.id;
                        this.key = this.values.indexOf(value);
                        let _this = this;
                        axios.post('/admin/attributes/delete-values', {
                            id: _this.currentId
                        }).then (function(response){
                            if (response.data.status === 'success') {
                                _this.values.splice(_this.key, 1);
                                _this.resetValue();
                                swalButtons.fire({
                                    //position: 'top-end',
                                    icon: 'success',
                                    title: 'Success!',
                                    text: 'Value deleted successfully!',
                                    showConfirmButton: false,
                                    timer: 1000
                                });
                            } else {
                                swalButtons.fire({
                                    title: 'Error',
                                    html: 'Your option value not deleted!', // html tag
                                    icon: 'error'
                                });
                            }
                        }).catch(function (error) {
                            console.log(error);
                        });
                    }
                    else {
                        swalButtons.fire({
                            title: 'Cancelled',
                            html: 'Your option value not deleted!', // html tag
                            icon: 'info',
                            showConfirmButton: false,
                            timer: 1000
                        });
                    }

                });
            },

            btnBackList: function(event) {
                location.href="http://localhost/admin/attributes";
            },
            

        }
    }





    
</script>