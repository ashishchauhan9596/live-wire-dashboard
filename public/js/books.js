// Call the dataTables jQuery plugin
$(document).ready(function () {
    $("#books").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "/booksTable",
            type: "GET",
        },
        columns: [
            { data: "id", name: "id" },
            { data: "name", name: "name" },
            { data: "created_at", name: "created_at" },
            // { data: "action", name: "action", orderable: false },
        ],
    });
});
