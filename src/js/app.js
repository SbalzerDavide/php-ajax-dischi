import Vue from "vue";
import axios from "axios";

const app = new Vue({
    el: "#app",
    data:{
        albums: [],
        apiUrl: window.location.href + 'partials/database.php',
        authorList: [],
        filter: '',
    },
    created(){
        axios.get(this.apiUrl)
            .then( response => {
                // handle success
                console.log(response.data[0]);
                this.albums = response.data[0];
                this.albums.forEach( album => {
                    this.authorList.push(album.author);
                });
                console.log('list: ' + this.authorList);
        
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
                    this.albums = response.data[1];
                })
                .catch( error => {
                    // handle error
                    console.log(error);
                });
    
        }
    }
})

 