<section class="UserDashboard">
    <div class="section stats">
        <div class="stat">
            <span>{{ $count_all_users }}</span>
            <span>{{ Str::plural('User', $count_all_users) }}</span>
        </div>

        <div class="stat">
            <span>{{ $count_unread_messages }}</span>
            <span>{{ Str::plural('Unread Message', $count_unread_messages) }}</span>
        </div>
    </div>
</section>
