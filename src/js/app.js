import Vue from "vue";
import axios from "axios";

const app = new Vue({
    el: "#app",
    data:{
        prova: 'prooova',
        albums: [],
        apiUrl: window.location.href + 'partials/database.php',
        filter: '',
    },
    created(){
        axios.get(this.apiUrl)
            .then( response => {
                // handle success
                console.log(response.data);
                this.albums = response.data;
            })
            .catch( error => {
                // handle error
                console.log(error);
            });
    },
    methods:{
        applyFilter(){
            console.log(this.filter);
            axios.get(this.apiUrl, {
                params: {
                  author: this.filter,
                }
              })
                .then( response => {
                    // handle success
                    console.log(response.data);
                    this.albums = response.data;
                })
                .catch( error => {
                    // handle error
                    console.log(error);
                });
    
        }
    }
})

 