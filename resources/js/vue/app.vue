<template>
        <div class="banner-content">
            <h2>COVID-19 Tracker</h2>
            <h4>Tatal Confirmed Corona Cases</h4>
            <h2 class="count-people">{{ items.Global.TotalConfirmed }}</h2>
            <ul class="lab-ul">
                <li>Active cases <span class="count-people">{{ items.Global.TotalConfirmed-items.Global.TotalRecovered-items.Global.TotalDeaths }}</span></li>
                <li>Recovered cases <span class="count-people">{{ items.Global.TotalRecovered }}</span></li>
                <li>Deaths <span class="count-people">{{ items.Global.TotalDeaths }}</span></li>
            </ul>
        </div>
</template>

<script>

export default {
    data: function(){
        return {
            items: []
        }
    },
    methods: {
        getList(){
            axios.get('https://api.covid19api.com/summary')
            .then(response=>{
                this.items = response.data;
            })
            .catch(error => {
                console.log(error);
            })
        }
    },
    created(){
        this.getList();
    }
}
</script>

<style scoped>
.container{
    width: 350px;
    margin: auto;
}
.heading{
    background: #e6e6e6;
    padding: 10px;
}
#title{
    text-align: center;
    margin: auto;
}
</style>