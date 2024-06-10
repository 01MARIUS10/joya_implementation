var PRODUCTS_JSON ={
    product_json:[],
    categorie:[],

    async init(){
        const reponse = await fetch("/data/articles.json", {
            method: "POST", 
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify(''),
        });
      
        const resultat = await reponse.json();
        this.product_json = resultat;

        Object.keys(resultat).forEach(e=>{
        const subcat = Object.keys(resultat[e])
        if(subcat[0] && subcat[0] !== '0'){
            this.categorie[e] = subcat 
        }
        else{
            this.categorie.push(e)
        }
        })
        
        console.log("Réussite :", this);

    },
    getById(){
        return 1
    }
}


let Panier = {
    items:[],
    init(){
        this.items = [1,2,3]
    },
    add(id){
        this.items.push(id)
    },
    remove(id){
        this.items.pop()
    }
}

let VIEW_ = {
    updatePanier(){},
    updateArticle(){},
}

PRODUCTS_JSON.init()