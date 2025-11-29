<div class="header">
    <div class="header-content">
        <div class="header-left">
            <h1 class="header-title">{{ $title ?? 'Admin Panel' }}</h1>
            <p class="header-subtitle">{{ $subtitle ?? 'Kelola konten website BEM REMA UPI' }}</p>
        </div>
        
        <div class="header-right">
            <div class="user-info">
                <div class="user-avatar">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <div class="user-details">
                    <p class="user-name">Admin</p>
                    <p class="user-role">Administrator</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.header {
    background: white;
    border-bottom: 1px solid #E5E7EB;
    padding: 1.5rem 2rem;
    margin-bottom: 2rem;
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header-left {
    flex: 1;
}

.header-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #37537A;
    margin-bottom: 0.25rem;
}

.header-subtitle {
    font-size: 0.875rem;
    color: #6B7280;
}

.header-right {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.user-info {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.5rem 1rem;
    background: #F9FAFB;
    border-radius: 0.5rem;
}

.user-avatar {
    width: 2.5rem;
    height: 2.5rem;
    background: linear-gradient(135deg, #37537A 0%, #2c4261 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.user-details {
    display: flex;
    flex-direction: column;
}

.user-name {
    font-weight: 600;
    color: #1F2937;
    font-size: 0.875rem;
}

.user-role {
    font-size: 0.75rem;
    color: #6B7280;
}
</style>
