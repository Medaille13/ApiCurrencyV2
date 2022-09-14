var app1 = new Vue({
  el: "#app",
  data: {
    montant:'',
    resultat:0,
    paire:"",
    devise:{},
    paires: [
      "usd-eur",
      "eur-usd",
    ],
    rate: {},
  },
  methods: {
    conversor: function(e) {
      var paire = document.getElementById('paire');
      choice = paire.selectedIndex ;
      //recuperation clic utilisateur + calcul
      valeur_cherchee = paire.options[choice].value;
      axios.get("http://127.0.0.1:8000/api/recuperationclic/"+valeur_cherchee)
      .then(response => response.json());
      this.resultat= this.montant*1.3425;
      console.log(valeur_cherchee);
    },
    fetchApi:async function() {
       await  axios.get("http://127.0.0.1:8000/api/recuperationpaire")
      .then(response=>{
        this.devise=response.data;
        console.log(this.devise);
      })
      .catch(error=>console.log(error));
    }
    
  },
  
  created(){
    fetch('http://127.0.0.1:8000/api/recuperationpaire')
  .then(response => response.json())
  .then(json => console.log(json))
  }
});


Vue.component("paire", {
  data(){
    return {
      paires: [
        "miah",
        "cool",
        "try"
      ],
      rate: {},
    }
  },
  props: ["paires"],
  template: "<option>{{ paire }}</option>"
})


// NE PAS PRENDRE EN COMPTE C'EST UN TEST.
Vue.component("Count", {
  data: function() {
    return {
      count: 0
    }
  },
  template: '<button v-on:click="count++">Convertir {{ count }} times.</button>'
})
