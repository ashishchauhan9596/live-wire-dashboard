// Call the dataTables jQuery plugin
$(document).ready(function () {
    $("#authors").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "/authorsTable",
            type: "GET",
        },
        columns: [
            { data: "id", name: "id" },
            { data: "name", name: "name" },
            { data: "email", name: "email" },
            { data: "email_verified_at", name: "email_verified_at" },
            { data: "created_at", name: "created_at" },
            // { data: "action", name: "action", orderable: false },
        ],
    });
});
