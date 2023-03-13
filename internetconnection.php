<style>
    /* Toast styles */
    .toast {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border-radius: 4px;
        opacity: 0;
        transition: opacity 0.3s;
        z-index: 9999;
    }

    .toast.show {
        opacity: 1;
    }
</style>
<!-- Toast container -->
<div class="toast" id="toast"></div>

<script>
    // Function to display toast
    function showToast(message) {
        const toast = document.getElementById("toast");
        toast.textContent = message;
        toast.classList.add("show");
        setTimeout(() => {
            toast.classList.remove("show");
        }, 5000);
    }
    // Function to check internet connection
    function checkInternetConnection() {
        const online = window.navigator.onLine;
        if (online) {
            showToast("Internet connection is active.");
        } else {
            showToast("Connect to internet to view all features");
        }
    }
    // Add event listener for online/offline events
    window.addEventListener("online", checkInternetConnection);
    window.addEventListener("offline", checkInternetConnection);
    // Check internet connection on page load
    checkInternetConnection();
</script>