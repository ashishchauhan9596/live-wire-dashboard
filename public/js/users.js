// Call the dataTables jQuery plugin
$(document).ready(function () {
    $("#users").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "/usersTable",
            type: "GET",
        },
        columns: [
            { data: "id", name: "id" },
            { data: "name", name: "name" },
            { data: "email", name: "email" },
            { data: "email_verified_at", name: "email_verified_at" },
            { data: "role", name: "role" },
            { data: "created_at", name: "created_at" },
            // { data: "action", name: "action", orderable: false },
        ],
    });
});
