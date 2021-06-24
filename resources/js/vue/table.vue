<template>
    <el-table
    border
    :default-sort = "{prop: 'Country', order: 'ascending'}"
    :data="items.Countries.filter(data => !search || data.Country.toLowerCase().includes(search.toLowerCase()))"
    style="width: 100%"
    max-height="500">
    <el-table-column
        fixed
        sortable
        prop="Country"
        label="Country"
        width="150">
    </el-table-column>
    <el-table-column
      prop="TotalConfirmed"
      sortable
      label="Total Cases"
      width="150">
    </el-table-column>
    <el-table-column
      prop="NewConfirmed"
      sortable
      label="New Cases"
      width="150">
        <template slot-scope="scope">
            <span v-if="scope.row.NewConfirmed>0">
                {{ scope.row.NewConfirmed }}
            </span>
        </template>
    </el-table-column>
    <el-table-column
      prop="TotalDeaths"
      sortable
      label="Total Death"
      width="150">
    </el-table-column>
    <el-table-column
      prop="TotalRecovered"
      sortable
      label="Total Recovered"
      width="150">
    </el-table-column>
    <el-table-column
      prop="TotalRecovered"
      sortable
      label="Active Case"
      width="150">
    <template slot-scope="scope">
        {{ scope.row.TotalConfirmed-scope.row.TotalDeaths-scope.row.TotalRecovered }}
    </template>
    </el-table-column>
    <el-table-column>
      <template slot="header" slot-scope="scope">
        <el-input
          v-model="search"
          size="mini"
          placeholder="Type to search"/>
      </template>
      <template slot-scope="scope">
        {{ scope.row.CountryCode }}
      </template>
    </el-table-column>
  </el-table>
</template>

<script>
export default {
    data: function(){
        return {
            items: [],
            search:'',
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