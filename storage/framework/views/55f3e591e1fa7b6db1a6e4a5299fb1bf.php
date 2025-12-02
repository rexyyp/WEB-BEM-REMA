
<div id="loading-overlay" class="hidden fixed inset-0 flex items-center justify-center z-50" style="background-color: rgba(255, 255, 255, 0.95);">
    <div class="bg-white rounded-lg p-8 flex flex-col items-center shadow-2xl border border-gray-200">
        <div class="animate-spin rounded-full h-16 w-16 border-b-4 border-blue-900 mb-4"></div>
        <p class="text-gray-700 font-semibold text-lg">Memproses...</p>
        <p class="text-gray-500 text-sm mt-2">Mohon tunggu sebentar</p>
    </div>
</div>


<div id="confirmation-modal" class="hidden fixed inset-0 flex items-center justify-center z-[60]" style="background-color: rgba(0, 0, 0, 0.75);">
    <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4 shadow-2xl">
        <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-red-100 rounded-full">
            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 text-center mb-2">Konfirmasi Hapus</h3>
        <p class="text-gray-600 text-center mb-6">Apakah Anda yakin ingin menghapus data ini? Tindakan ini tidak dapat dibatalkan.</p>
        <div class="flex gap-3">
            <button type="button" onclick="cancelDelete()" class="flex-1 px-4 py-3 bg-gray-200 text-gray-800 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
                Batal
            </button>
            <button type="button" onclick="confirmDelete()" class="flex-1 px-4 py-3 bg-red-600 text-white rounded-lg font-semibold hover:bg-red-700 transition-colors">
                Ya, Hapus
            </button>
        </div>
    </div>
</div>

<script>
    // Global variables
    let deleteForm = null;
    let isDeleting = false;

    // Show loading overlay
    function showLoading() {
        document.getElementById('loading-overlay').classList.remove('hidden');
    }

    // Hide loading overlay
    function hideLoading() {
        document.getElementById('loading-overlay').classList.add('hidden');
    }

    // Show confirmation modal
    function showDeleteConfirmation(form, event) {
        if (event) {
            event.preventDefault();
            event.stopPropagation();
        }
        deleteForm = form;
        isDeleting = true;
        document.getElementById('confirmation-modal').classList.remove('hidden');
        return false;
    }

    // Confirm delete
    function confirmDelete() {
        if (deleteForm) {
            document.getElementById('confirmation-modal').classList.add('hidden');
            showLoading();
            isDeleting = false;
            deleteForm.submit();
        }
    }

    // Cancel delete
    function cancelDelete() {
        deleteForm = null;
        isDeleting = false;
        document.getElementById('confirmation-modal').classList.add('hidden');
        hideLoading();
    }

    // Auto-hide alerts after 5 seconds
    document.addEventListener('DOMContentLoaded', function() {
        const alerts = document.querySelectorAll('[role="alert"]');
        alerts.forEach(alert => {
            setTimeout(() => {
                alert.style.transition = 'opacity 0.5s, transform 0.5s';
                alert.style.opacity = '0';
                alert.style.transform = 'translateY(-20px)';
                setTimeout(() => alert.remove(), 500);
            }, 5000);
        });

        // Show loading on form submit (except delete forms with confirmation)
        document.querySelectorAll('form').forEach(form => {
            if (!form.classList.contains('no-loading')) {
                form.addEventListener('submit', function(e) {
                    // Check if this is a delete form with onsubmit handler
                    const hasDeleteConfirmation = this.getAttribute('onsubmit') && 
                                                  this.getAttribute('onsubmit').includes('showDeleteConfirmation');
                    
                    // Don't show loading for delete forms that use confirmation modal
                    if (!hasDeleteConfirmation) {
                        showLoading();
                    }
                });
            }
        });

        // Hide loading when page loads
        window.addEventListener('pageshow', function() {
            hideLoading();
        });
    });

    // Close modals on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            cancelDelete();
        }
    });
</script>

<style>
    /* Smooth transitions for loading */
    #loading-overlay {
        animation: fadeIn 0.3s ease-in-out;
    }

    #confirmation-modal {
        animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Pulse animation for loading spinner */
    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.5;
        }
    }
</style><?php /**PATH C:\PROOJEC WEB REMA\WEB REMA\resources\views/partials/loading-overlay.blade.php ENDPATH**/ ?>