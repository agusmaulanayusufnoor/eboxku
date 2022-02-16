<template>

    <div v-else class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card card-info direct-chat direct-chat-primary">
                    <div class="card-header">
                       <h3 class="card-title">Chat ke Telegram Eboxku</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                            <i class="fas fa-comments"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-footer">
                        <section class="form">
                            <form action="/sendchat" method="post">
                                <textarea v-model="text" class="form-control"
                                rows="3" placeholder="chat disini..."></textarea>
                                <span slot="append">
                                    <button type="submit" class="btn btn-info btn-sm float-right">
                                        <i class="fas fa-paper-plane"></i> Kirim
                                    </button>
                                </span>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
