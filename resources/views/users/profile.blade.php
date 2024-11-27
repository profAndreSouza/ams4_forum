@extends('layouts.header')

@section('content')
<div class="container">
    <div class="settings-container">
        <div class="sidebar">
            <div class="sidebar">
                <div class="sidebar-menu">
                    <h2>MENU</h2>
                    <p class="menu-item" onclick="selectMenuItem(this)"><i class="fa-regular fa-compass"></i>Explore Topics</p>
                    <p class="menu-item" onclick="selectMenuItem(this)"><i class="fa-solid fa-tag"></i>Tags</p>
                </div>
                <div class="sidebar-personalnav">
                    <h2>PERSONAL NAVIGATOR</h2>
                    <p class="menu-item" onclick="selectMenuItem(this)"><i class="fa-regular fa-circle-question"></i>My Questions</p>
                    <p class="menu-item" onclick="selectMenuItem(this)"><i class="fa-regular fa-comments"></i>My Answers</p>
                    <p class="menu-item" onclick="selectMenuItem(this)"><i class="fa-regular fa-thumbs-up"></i>My Likes</p>
                </div>
                <div class="sidebar-premium">

                </div>
            </div>
        </div>
        <div class="content">
            <h1>Public Profile</h1>
            <div class="settings-content">
                <div class="left">
                    <form action="{{route('users.update', [$user->id])}}" method="POST">
                        @csrf
                        @method('PUT')

                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="{{ $user->name }}" value="{{ $user->name }}" required>
                        @error('name') <span>{{ $message }}</span> @enderror

                        <label for="email">Public Email</label>
                        <input type="text" name="email" id="email" placeholder="{{ $user->email}}" value="{{ $user->email}}" required>
                        @error('email') <span>{{ $message }}</span> @enderror

                        <label for="">Bio</label>
                        <input type="text" placeholder="Tell us a little bit about yourself" value="{{ $user->photo }}" >

                        <label for="">Pronouns</label>
                        <select name="" id="">
                            <option value="She/her">She/her</option>
                            <option value="He/Him">He Him</option>
                        </select>
                        <input type="submit" value="Edit" class="profile-btn edit">
                        </form>
                        <div class="btns">
                        <form action="{{ route('users.destroy', [$user->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="profile-btn delete" value="Delete">
                    </form>
                        </div>
                    
                </div>
                <div class="right">
                    <p>Profile Picture</p>
                    <div class="user-wrapper">
                        <div class="user">
                            <img src="/storage/{{ $user->photo }}" />
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>
@endsection
