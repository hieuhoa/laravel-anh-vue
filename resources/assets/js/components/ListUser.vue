<template>
    <div class="list-user">
    <table class="tbl-list-user">
            <thead>
                <th>Name</th>
                <th>Location</th>
                <th>DOB</th>
            </thead>
            <tbody>
                <tr v-for="user in usersData"> 
                    <td><a @click="selectUser(user)">{{ user.name.title }} - {{ user.name.last }} {{ user.name.first }}</a></td>
                    <td>{{ user.location.city }}</td>
                    <td>{{ user.dob.date }}</td>
                </tr>
            </tbody>
        </table>                             
    </div>
</template>
                                                        <!--Get data  show view -->
<script>
    import data from './data.json'
    export default {
        data(){
            return {
                usersData:data  //show data;
            }
        },
        methods: {
            selectUser(user){
                this.$emit('userSelected',user)
            }
        }

    }
    // $emit choose object in DASH -> UserDashboard.vue
</script>

<style lang="scss" scoped>
.tbl-list-user{
    width:100%;
}
</style>
