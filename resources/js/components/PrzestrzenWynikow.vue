<template>
    <div>
        <div>
            <button @click.prevent="random('kamień')">KAMIEŃ</button>
            <button @click.prevent="random('papier')">PAPIER</button>
            <button @click.prevent="random('nożyce')">NOŻYCE</button>
        </div>
        <br><br>
        <history-button></history-button>
        <div id="size">
        <p v-for="element in history" :key="element.id">{{ element }}</p>

        </div>
    </div>
</template>

<script>
    import HistoryButton from './HistoryButton.vue';



    export default {
        data(){
            return{
                history: []
            };
        },
        methods:{
            random(player){

                
                var komp = Math.floor(Math.random()*3);
                var k, wynik;
                if(komp == 0)k = "kamień";
                if(komp == 1)k = "papier";
                if(komp == 2)k = "nożyce";

                if(player == k)
                {
                    this.history.push("Remis");
                    wynik = "Remis";
                }

                if((player == "kamień" && k == "papier")||(player == "papier" && k == "nożyce")||(player="nożyce"&&k=="kamień"))
                {
                    this.history.push("przegrana");
                    wynik = "przegrana";
                }

                if((player == "kamień" && k == "nożyce")||(player == "papier" && k == "kamień")||(player="nożyce"&&k=="papier"))
                {
                    this.history.push("WYGRANA");
                    wynik = "WYGRANA";
                }

                
                axios({
                    method: 'post',
                    url: '/sendResult',
                    data: {
                        wynik: wynik
                    }
                });
                
                  
            },
        },
        watch:{
            wynik: function() {
                console.log(this.wynik)
            }
        }
    }
</script>

<style scoped>
    #size{
        height:30vh;
        width: 40vh;
        margin-left: auto;
        margin-right: auto;
    }

    button{
        margin: 3vh;
        padding: 2vh;
        font-size: 0.9em;
    }
</style>