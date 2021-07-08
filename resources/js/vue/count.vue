<template>
    <div class="corona-count-top">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-3 col-md-6 col-12">
                <h5>Total Corona Statistics :</h5>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="corona-item">
                    <div class="corona-inner">
                        <div class="corona-thumb">
                            <img src="assets/images/corona/01.png" alt="corona">
                        </div>
                        <div class="corona-content">
                            <h3 class="count-number">{{ items.Global.TotalConfirmed }}</h3>
                            <p>Active Cases</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="corona-item">
                    <div class="corona-inner">
                        <div class="corona-thumb">
                            <img src="assets/images/corona/02.png" alt="corona">
                        </div>
                        <div class="corona-content">
                            <h3 class="count-number">{{ items.Global.TotalRecovered }}</h3>
                            <p>Recovered Cases</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="corona-item">
                    <div class="corona-inner">
                        <div class="corona-thumb">
                            <img src="assets/images/corona/03.png" alt="corona">
                        </div>
                        <div class="corona-content">
                            <h3 class="count-number">{{ items.Global.TotalDeaths }}</h3>
                            <p>Deaths</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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