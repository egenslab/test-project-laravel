<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Product List</div>
                <div class="card-body">
                    <div class="col-lg-12 row">
                        <div class="col-lg-3" v-for="(item, index) in dataList">
                            <div class="card" style="height: 517px;margin-bottom: 36px;">
                                <img :src="item.image" alt="Denim Jeans" style="width:100%">
                                <h6>{{item.name}}</h6>
                                <h6>{{item.author_name}}</h6>
                                <p class="price">${{item.price}}</p>
                                <p>{{item.detail}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                dataList: [],
                errors: []
            }
        },

        // Fetches posts when the component is created.
        created() {
            axios.get(`https://demo.getcoderzone.com/clients/laravel-test-project/api/products`)
                .then(response => {
                    // JSON responses are automatically parsed.
                    this.dataList = response.data.productList
                })
                .catch(e => {
                    this.errors.push(e)
                })
        }
    }
</script>
