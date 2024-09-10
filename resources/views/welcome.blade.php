<x-template description="システムエンジニアとして活躍する私のポートフォリオサイト。Laravelを用いたWebシステム開発の経験と実績を紹介しています。プロジェクトやスキルの詳細をご覧ください。" :structuredData="$structuredData" keywords="鳥田,莞太,鳥田莞太,鳥田 莞太,Kanta,Torida,Kanta Torida,Laravel,Laravel開発,システムエンジニア,SE,フルスタックエンジニア,Webアプリケーション,株式会社プロジェクトM,Project M,Web開発ポートフォリオ,データベース開発,三重県,三重,代表取締役,ベンチャー">
    <div id="profile" class="flex flex-col justify-center items-center w-full px-4 gap-10">
        <h1 class="text-4xl font-bold">PROFILE</h1>
        <div class="flex flex-col md:flex-row justify-between items-center w-full max-w-xl gap-6">
            <img src="{{ asset('storage/data/profile_img.jpeg') }}" alt="Profile Img" class="w-60 rounded-full white-shadow">
            <div>
                <h1 class="text-3xl font-medium mb-4">鳥田 莞太<span class="text-sm ml-6">(とりだ かんた)</span></h1>
                <p class="text-lg">システムエンジニア</p>
                <p class="text-lg">株式会社プロジェクトM 代表取締役</p>
                <div class="pt-2 px-4 flex flex-col gap-1">
                    <div class="flex">
                        <a href="https://mie-projectm.com/about" class="flex items-center gap-1 text-sm">
                            <img src="{{ asset('storage/data/link.svg') }}" alt="link" class="w-6">
                            <div>代表詳細ページ(経歴等)</div>
                        </a>
                    </div>
                    <div class="flex-col">
                        <a href="https://credence-clue.jp/torida_kanta/" class="flex items-center gap-1 text-sm">
                            <img src="{{ asset('storage/data/link.svg') }}" alt="link" class="w-6">
                            <div>Credence Clue(BS11) 番組出演</div>
                        </a>
                    </div>
                    <div class="flex">
                        <a href="https://the-innovator.jp/interviewees/torida_kanta/" class="flex items-center gap-1 text-sm">
                            <img src="{{ asset('storage/data/link.svg') }}" alt="link" class="w-6">
                            <div>ザ・イノベーター(Webマガジン) 掲載</div>
                        </a>
                    </div>
                    <div class="flex">
                        <a href="https://www.chunichi.co.jp/article/729304?rct=mie" class="flex items-center gap-1 text-sm">
                            <img src="{{ asset('storage/data/link.svg') }}" alt="link" class="w-6">
                            <div>みえ人模様(中日新聞) 掲載</div>
                        </a>
                    </div>
                </div>
                <div class="pt-4 px-4 flex gap-1">
                    <div class="flex">
                        <a href="https://www.instagram.com/ryusuke_projectm">
                            <img src="{{ asset('storage/data/instagram.svg') }}" alt="Instagram" class="w-8">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="work" class="flex flex-col flex-wrap justify-center items-center w-full px-4 mt-20 gap-6">
        <h1 class="text-4xl font-bold mb-4">WORK</h1>
        <div class="flex flex-wrap justify-center items-start w-full px-4 gap-6">
            <x-skill-card url="https://mogmap.com" image="mogmap.png" title="mogmap" description="初めて自分で進めた開発プロジェクトです。,mogmapはキッチンカーの出店場所をマップ上に表示することができるWebアプリケーションです。,現在公開されているものはVer.3です。" type="site" skills="Laravel,SCSS,JavaScript,Google Maps API,MySQL" eng_name="mogmap" />
            <x-skill-card url="https://demo.mieet-plus.com/recruit" image="mieet_plus.png" title="Mieet Plus 就活部" description="SNS風UIを用いた企業情報掲載Webサービスです。,ターゲットが大学生であることから、スマートフォンに最適化してあります。" type="site" skills="Laravel,SCSS,JavaScript,Google Maps API,MySQL" eng_name="mieet_plus" />
            {{--        <x-skill-card url="https://mogmap.com" image="mogmap.png" title="mogmap" description="初めて自分で進めた開発プロジェクトです。,mogmapはキッチンカーの出店場所をマップ上に表示することができるWebアプリケーションです。,現在公開されているものはVer.3です。" type="site" skills="Laravel,SCSS,JavaScript,Google Maps API,MySQL" eng_name="management_system" />--}}
            {{--        <x-skill-card url="https://mogmap.com" image="mogmap.png" title="mogmap" description="初めて自分で進めた開発プロジェクトです。,mogmapはキッチンカーの出店場所をマップ上に表示することができるWebアプリケーションです。,現在公開されているものはVer.3です。" type="site" skills="Laravel,SCSS,JavaScript,Google Maps API,MySQL" eng_name="garnet" />--}}
            <x-skill-card url="https://company-expo.com/2024_3/" image="company_expo.png" title="学内合同企業説明会" description="三重大学工学部同窓会主催 学内合同企業説明会の特設サイトです。,紙媒体のパンフレットをデジタルに代替する目的で開発しました。" type="site" skills="Laravel,SCSS,JavaScript,Google Maps API,MySQL" eng_name="company_expo" />
            <x-skill-card url="https://goofyskatepark.com/" image="goofy_skate_park.png" title="GOOFY SKATE PARK" description="三重県津市の津IC横にあるスケートパークのHPです。管理者画面も開発し、各コンテンツは管理者によって更新することが可能となっています。WordPress等のCMSよりも独自CMSにて機能を制限することにより、操作の簡易化を図っています。" type="site" skills="Laravel,SCSS,JavaScript,Google Maps API,MySQL" eng_name="goofy_skate_park" />
            {{--        <x-skill-card url="https://mie-seed.com" image="mogmap.png" title="mogmap" description="初めて自分で進めた開発プロジェクトです。,mogmapはキッチンカーの出店場所をマップ上に表示することができるWebアプリケーションです。,現在公開されているものはVer.3です。" type="site" skills="Laravel,SCSS,JavaScript,Google Maps API,MySQL" eng_name="seed" />--}}
        </div>
    </div>
    <div id="skill" class="flex flex-col justify-center items-center w-full px-4 mt-20">
        <h1 class="text-4xl font-bold mb-4">SKILL</h1>
        <div class="flex w-full flex-wrap justify-center items-start gap-12">
            <div class="flex flex-col max-w-sm gap-4 bg-primary p-2 rounded-lg">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('storage/data/laravel-logo.svg') }}" alt="JavaScript" class="h-12 w-auto">
                    <div class="text-2xl font-semibold tsukimi-rounded">Laravel</div>
                </div>
                <p class="px-2">
                    PHPのフレームワークであるLaravelを用いて、フロントエンド・バックエンドを通して、フルスタックに柔軟なWebアプリケーションを開発できます。
                </p>
            </div>
            <div class="flex flex-col max-w-sm gap-4 bg-primary p-2 rounded-lg">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('storage/data/javascript.svg') }}" alt="JavaScript" class="h-10 w-auto">
                    <div class="text-2xl font-semibold tsukimi-rounded">JavaScript</div>
                </div>
                <p class="px-2">
                    フロントエンド開発において、動的なWebページを実現するために使用します。豊富なライブラリが用意されているため、様々な機能を実装できます。
                </p>
                <div class="text-xs text-right">
                    <a target="_blank" href="https://icons8.com/icon/39853/javascript" class="underline">
                        JavaScript
                    </a>
                    アイコン by
                    <a target="_blank" href="https://icons8.com" class="underline">
                        Icons8
                    </a>
                </div>
            </div>
            <div class="flex flex-col max-w-sm gap-4 bg-primary p-2 rounded-lg">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('storage/data/database.svg') }}" alt="JavaScript" class="h-10 w-auto">
                    <div class="text-2xl font-semibold tsukimi-rounded">データベース</div>
                </div>
                <p class="px-2">
                    MySQLを中心に、データベースの設計・開発を行います。データの取得・保存・更新・削除など、データベースに関する全ての操作を行えます。
                    <br>
                    MySQL, MariaDB, PostgreSQL
                </p>
            </div>
            <div class="flex flex-col max-w-sm gap-4 bg-primary p-2 rounded-lg">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('storage/data/phone.svg') }}" alt="JavaScript" class="h-10 w-auto">
                    <div class="text-2xl font-semibold tsukimi-rounded">PWA</div>
                </div>
                <p class="px-2">
                    プログレッシブウェブアプリケーション(PWA)は、Webアプリケーションをネイティブアプリケーションのように動作させる技術です。オフラインでも動作するため、ユーザーにとって使いやすいWebアプリケーションを開発できます。
                </p>
            </div>
            <div class="flex flex-col max-w-sm gap-4 bg-primary p-2 rounded-lg">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('storage/data/wind.svg') }}" alt="JavaScript" class="h-10 w-auto">
                    <div class="text-2xl font-semibold tsukimi-rounded">Tailwind CSS</div>
                </div>
                <p class="px-2">
                    Tailwind CSSは、CSSフレームワークです。クラス名を用いて、簡単にスタイルを適用できます。また、カスタマイズも容易であるため、デザインの自由度が高いです。
                </p>
            </div>
            <div class="flex flex-col max-w-sm gap-4 bg-primary p-2 rounded-lg">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('storage/data/slack.svg') }}" alt="JavaScript" class="h-10 w-auto">
                    <div class="text-2xl font-semibold tsukimi-rounded">Slack 連携</div>
                </div>
                <p class="px-2">
                    Slack APIを用いて、Slackとの連携を行います。WebアプリケーションとSlackを連携させることで、業務の効率化を図ります。
                </p>
            </div>
        </div>
    </div>
    <div id="contact" class="flex flex-col justify-center items-center w-full px-4 bg-sub mt-20 py-12">
        <h1 class="text-4xl font-bold mb-4">CONTACT</h1>
        <div>
            お仕事のご依頼からとりあえずちょっと聞いてみたいまでなんでもお気軽にお問い合わせください。
        </div>
        @if(session('message'))
            <div class="bg-primary text-white p-4 rounded-lg mt-4">
                <p>{{ session('message') }}</p>
            </div>
        @endif
        <form action="{{ route('contact') }}" method="POST" class="p-4 flex flex-col gap-6 w-full max-w-2xl">
            @csrf
            <div class="flex flex-col max-w-sm">
                <label for="name" class="text-sm">お名前</label>
                <input id="name" name="name" type="text" class="rounded-lg bg-transparent border-theme" placeholder="お名前">
            </div>
            <div class="flex flex-col max-w-sm">
                <label for="email" class="text-sm">メールアドレス</label>
                <input id="email" name="email" type="email" class="rounded-lg bg-transparent border-theme" placeholder="メールアドレス">
            </div>
            <div class="flex flex-col">
                <label for="message" class="text-sm">お問い合わせ内容</label>
                <textarea name="message" id="message" rows="10" class="rounded-lg bg-transparent border-theme"></textarea>
            </div>
            <script src="https://www.google.com/recaptcha/api.js?render={{ env('NOCAPTCHA_SITEKEY') }}" async defer></script>
            {!! app('captcha')->display() !!}
            <div class="flex justify-center items-center">
                <button type="submit" class="white-click-shadow bg-primary py-4 px-6 rounded-lg relative overflow-hidden">
                    <span class="text-2xl">送信</span>
                </button>
            </div>
        </form>
    </div>
    @vite(['resources/js/index.js'])
</x-template>
