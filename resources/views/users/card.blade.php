
<div class="card">
    <div class="card-header">
        <h2 class="card-title">{{$user->name }}</h2>
    </div>
    <div class="card-body">
        <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
    </div>
</div>
@include('user_follow.follow_button', ['user' => $user])
