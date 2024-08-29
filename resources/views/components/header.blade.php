<header class="w-full md:h-28 h-20 fixed top-0 right-0 left-0 flex justify-between items-center px-4 bg-black/50 z-50">
    <a href="{{ route('index') }}" class="flex items-center gap-4">
        <div class="md:w-20 md:h-20 h-12 w-12 flex justify-center items-center bg-theme rounded-full">
            <img src="{{ asset('storage/icon.png') }}" alt="icon" class="md:w-16 w-8">
        </div>
    </a>
    <button id="menu-btn" type="button" class="w-12 h-12 justify-center items-center relative cursor-pointer flex md:hidden">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <nav id="menu-box" class="md:items-center items-end md:px-0 px-6 gap-6 flex-col flex md:flex-row fixed md:top-0 top-20 md:relative transition-all duration-500">
        <button type="button" class="text-2xl font-bold tsukimi-rounded header-btn" data-target="profile">Profile</button>
        <button type="button" class="text-2xl font-bold tsukimi-rounded header-btn" data-target="work">Work</button>
        <button type="button" class="text-2xl font-bold tsukimi-rounded header-btn" data-target="skill">Skill</button>
        <button type="button" class="text-2xl font-bold tsukimi-rounded header-btn" data-target="contact">Contact</button>
    </nav>
</header>
