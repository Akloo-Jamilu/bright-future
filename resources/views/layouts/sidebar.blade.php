<div class="parle">
    <div class="sidebar">
        <div class="logos">BF.</div>
        <ul class="menu">
            <li class="{{ request()->is('/') ? 'act' : '' }}">
                <a href="{{ url('dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->is('create-account') ? 'act' : '' }}">
                <a href="{{ url('create-account') }}">
                    <i class="fas fa-user"></i>
                    <span>Create Account</span>
                </a>
            </li>
            <li class="{{ request()->is('debit-request') ? 'act' : '' }}">
                <a href="{{ url('debit-request') }}">
                    <i class="fas fa-chart-bar"></i>
                    <span>Debit Request</span>
                </a>
            </li>
            <li class="logout">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <i class="fas fa-sign-out-alt"></i>
                    <button type="submit" class="logout-button">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</div>


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="logout-button">Logout</button>
</form>