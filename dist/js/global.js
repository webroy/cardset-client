function showSuccessMsg(msg) {
    // Initiale Success Toast
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000
    });

    Toast.fire({
        type: 'success',
        title: "&nbsp;  " + msg
    })
}

function showErrorMsg(msg) {
    // Initiale Error Toast
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000
    });

    Toast.fire({
        type: 'error',
        title: "&nbsp;  " + msg
    })
}

function showInfoMsg(msg) {
    // Initiale Warn Toast
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000
    });

    Toast.fire({
        type: 'info',
        title: "&nbsp;  " + msg
    })
}