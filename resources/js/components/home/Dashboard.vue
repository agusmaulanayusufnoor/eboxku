<template>

    <div v-else class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">PT BPR KARYA UTAMA JABAR</h1>
            </div>

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <router-link to="chat-tele" class="btn btn-outline-info" role="button"
                        style="text-decoration:none;">Chat Telegram</router-link></li>
                    </li>
                </ol>
            </div>

        </div>
    </div>
</template>

<script>
    export default {

    data() {
       return {
           username: localStorage.auth_user,
         level_id: localStorage.auth_user,
         kantor_id: localStorage.auth_user
       }

    }

}
</script>
