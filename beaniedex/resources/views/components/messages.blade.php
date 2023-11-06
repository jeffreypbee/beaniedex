@if(session()->has('message'))

<div x-data="{show: true}" x-show="show" class="message">
    <div class="alert">!</div>
    <div class="text">
        {{session('message')}}
    </div>
    <div class="button">
        <button @click="show=false">X</button>
    </div>    
</div>

@endif


<style>

    .message {
        width: 80%;
        height: 70px;
        padding: 5px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: var(--gradient);
        box-shadow: var(--shadow);
    }
    
    .message .alert {
        color: white;
        font-weight: bold;
        font-size: 2rem;
        padding: 20px;
    }

    .message .text {
        background: white;
        border-radius: 20px;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        padding: 10px;
    }

    .message .button {
        padding: 10px;
    }

    .message .button button {
        background-color: white;
        color: var(--pink);
        font-weight: bold;
    }
    
</style>