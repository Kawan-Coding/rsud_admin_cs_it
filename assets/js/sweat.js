const confirm = Swal.mixin({
    confirmButtonColor: "#28a745",
    showCancelButton: true
})

function sa_notif(status, message) {
    const notif = Swal.mixin({
        confirmButtonColor: "#28a745",
    })
    notif.fire({
        icon: status,
        title: message
    })
}