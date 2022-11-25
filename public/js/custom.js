// to get current year
function ajexalert(classname, message) {
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    Toast.fire({
        icon: classname,
        title: message
    })
}
