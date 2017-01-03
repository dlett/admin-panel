<template>
    <div class="main">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Revisions</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Action</th>
                        <th>Author</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="revision in revisions">
                        <td>
                            <a href="" @click.prevent="openModal(revision.id)">
                                {{ revision.description }}
                            </a>
                        </td>
                        <td>{{ revision.causer.name }}</td>
                        <td>{{ revision.created_at | friendlyDate }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div v-for="revision in revisions">
            <div class="modal fade" tabindex="-1" role="dialog" id="revisionData">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title">Revision diff</h4>
                        </div>
                        <div class="modal-body">
                            <p>These are the properties that were changed during this update.</p>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Attribute</th>
                                    <th>Old</th>
                                    <th>New</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="change in getChanges(revision)">
                                    <td>{{ attributes[change.attribute] }}</td>
                                    <td>{{ change.old }}</td>
                                    <td>{{ change.new }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['items'],
        data() {
            return {
                revisions: [],
                attributes: {
                    name: 'Name',
                    email: 'Email',
                    forum_name: 'Forum Name',
                    mta_name: 'In-Game Account',
                    time_zone: 'Time Zone'
                }
            }
        },
        methods: {
            openModal(revisionId) {
                console.log('Opening revision ' + revisionId);
                $('#revisionData').modal({
                    show: true
                });
            },
            getChanges(revision) {
                let changes = [];

                _.each(revision.properties.attributes, (value, key) => {
                    let old = revision.properties.old[key];
                    if (old != value) {
                        changes.push({
                            attribute: key,
                            old: old,
                            new: value
                        });
                    }
                });

                return changes;
            }
        },
        created() {
            this.revisions = JSON.parse(this.items);
        },
        filters: {
            friendlyDate(value) {
                return Moment(value).format('MMM D YYYY, h:mm a');
            }
        }
    }
</script>
