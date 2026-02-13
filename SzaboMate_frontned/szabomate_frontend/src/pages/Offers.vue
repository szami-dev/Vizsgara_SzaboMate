
<script>
import axios from 'axios';
axios.defaults.baseURL = 'http://localhost:5000/api';

export default {
    name: 'Offers',
    data() {
        return {
            ingatlanok: []
        };
    },
    mounted() {
        axios.get('/ingatlan')
            .then(response => {
                this.ingatlanok = response.data;
            })
            .catch(error => {
                console.error('Hiba az ingatlanok lekérésekor:', error);
            });
        }
}
</script>

<template>
    <h1 class="mb-4 text-center">Ajánlataink</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Kategória</th>
                <th>Leírás</th>
                <th>Hirdetés dátuma</th>
                <th>Tehermentes</th>
                <th>Fénykép</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="ingatlan in ingatlanok" :key="ingatlan.id">
                <td class="text-center">{{ ingatlan.kategoriaNev }}</td>
                <td>{{ ingatlan.leiras }}</td>
                <td class="text-center">{{ ingatlan.hirdetesDatuma }}</td>
                <td class="text-center" :class="{zold: ingatlan.tehermentes, piros: !ingatlan.tehermentes}">
                    {{ ingatlan.tehermentes ? 'Igen' : 'Nem' }}
                </td>
                <td class="text-center">
                    <img :src="ingatlan.kepUrl" alt="Ingatlan fénykép" class="img-fluid" style="max-width: 100px; height: auto;"/>
                </td>
            </tr>
        </tbody>
    </table>
</template>
<style>
.table {
    margin-top: 20px;
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
}
.table th, .table td {
    border: 1px solid #dee2e6;
    padding: 12px 15px;
    text-align: left;
}
.table th {
    background-color: #f8f9fa;
    font-weight: bold;
}
.zold
    {
       color: green ;
    }
.piros
    {
        color: red ;
    }
</style>