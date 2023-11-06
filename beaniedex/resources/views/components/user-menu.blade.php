<div x-data="{expand: false}" class="user-menu">
    <button @click="expand = !expand">{{auth()->user()->name}}</button>
    <div x-show="expand" class="expanded-menu">
        <a href=""><button>Profile</button></a>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
    </div>
</div>

<style>

.user-menu button {
    background-color: white;
    color: var(--pink);
    font-weight: bold;
    position: relative;
    border-radius: 0;
    width: 100px;
    text-align: center;
}

.user-menu .expanded-menu {
    position: absolute;
    background: white;
    box-shadow: var(--shadow);
}

.user-menu .expanded-menu button:hover {
    background-color: var(--yellow-lucent);
}

</style>