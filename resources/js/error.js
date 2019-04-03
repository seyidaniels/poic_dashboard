export default function handleError(error) {
    if (error.response) {
        if (error.response.status == 401 || error.response.status == 400) {
            toastr.error("Oooops! Please sign in again");
            localStorage.removeItem('token')
            localStorage.removeItem('user')
            setTimeout(() => {
                location.href = "/dashboard"
            }, 3000);
        } else if (error.response.status === 422) {
            if (error.response.data.message) {
                toastr.error(error.response.data.message)
            } else {
                Object.values(error.response.data.error).forEach(function (element) {
                    toastr.error(element)
                })
            }
        } else if (error.response.status === 404) {
            toastr.error("Could not find the requested resource")
        } else if (error.response.status === 500) {
            toastr.error(error.response.data.message)
        }
    }
}
