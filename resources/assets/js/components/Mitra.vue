<template>
    <div class="card">
        <div class="header">
            <h4 class="title">Email Statistics</h4>
            <p class="category">Last Campaign Performance</p>
        </div>
        <div class="content">
            <ul  class="nav nav-tabs">
                <li class="active">
                    <a  href="#1b" data-toggle="tab">Mitra</a>
                </li>
                <li>
                    <a href="#2b" data-toggle="tab">Tempat</a>
                </li>
            </ul>
            <div class="tab-content clearfix">
                <div class="tab-pane active" id="1b">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Mitra</th>
                                    <th>Email</th>
                                    <th>Kontak</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for"models in hasil">
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>
                                        <button class="btn btn-primary">
                                            View
                                        </button>
                                        <button class="btn btn-warning">
                                            Edit
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="2b">
                    <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
                </div>
            </div>
        </div>
    </div>
	            
</template>

<script>
    import axios from 'axios'
	export default{
		data(){
			return {
                hasil:[]
            }
		},
		methods:{
        },
        created(){
            this.$http.get("{{http://localhost/ceklokasi/public/xxx/mitra}}").then(function(response){
                    this.hasil = data.model.data;
                })
        }
	} 
</script>