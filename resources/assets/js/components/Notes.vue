<template>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Notes</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <ul class="products-list product-list-in-box">
                <li class="item" v-for="note in notes">
                    <div class="product-img">
                        <img src="http://localhost:8000/bower_components/AdminLTE/dist/img/avatar.png" class="img img-rounded">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">{{ note.creator.name }}</a>
                        <span class="product-description">
                          {{ note.content }}
                        </span>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
            <div class="form">
                <div class="form-group">
                    <textarea class="form-control" v-model="note"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Add Note</button>
                </div>
            </div>
        </div>
        <!-- /.box-footer -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                note: '',
                notes: [
                    {
                        id: 1,
                        content: 'Sample Note',
                        creator: {
                            name: 'Crierd'
                        },
                        created_at: '2016-01-01 23:59:59'
                    }
                ]
            }
        }
    }
</script>
