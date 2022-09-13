Vue.component("paire",{
    props:["paire"],
    template:"<option value=\"USD\">USD</option>"
})

var app1 = Vue ({
    el:"app1",
    data:{
        paire:{}
    },    

created(){
    axios.get("http://127.0.0.1:8000/api/recuperationpaire")
    .then(response=>{
        this.paire=response;
        console.log(this.paire);
    })
    .catch(error=>console.log(error));
}
})

