<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1024" />
    <meta property="og:title" content="LunarList" />
    <meta property="og:description"
        content="Официальный Лист LunarGDPS" />
    <meta property="og:url" content="https://nicepeek2.github.io/LunarGdpsList/" />
    <meta property="og:image" content="/welistico.png" />
    <title>LunarList</title>
    <link rel="icon" href="/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/reset.css" />
    <link rel="stylesheet" type="text/css" href="./css/typography.css" />
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" type="text/css" href="./css/pages/list.css" />
    <link rel="stylesheet" type="text/css" href="./css/pages/leaderboard.css" />
    <link rel="stylesheet" type="text/css" href="./css/pages/roulette.css" />
    <link rel="stylesheet" type="text/css" href="./css/components/nav.css" />
    <link rel="stylesheet" type="text/css" href="./css/components/btn.css" />
    <link rel="stylesheet" type="text/css" href="./css/components/tabs.css" />
    <link rel="stylesheet" type="text/css" href="./css/components/select.css" />
    <link rel="stylesheet" type="text/css" href="./css/pages/auth.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/vue@3.2.31/dist/vue.global.js"></script>
    <script src="https://unpkg.com/vue-router@4.0.14/dist/vue-router.global.prod.js"></script>
    <script type="module" src="./js/main.js"></script>
    <script src="./js/components/select.js"></script>
</head>
<body id="app">
    <div class="root" :class="{ dark: store.dark }">
        <header class="surface">
            <div class="logo">
                <img src="./welistico.png" alt="logo" />
            </div>
            <nav class="nav">
                <div class="droplist">
                    <div class="droplistbutton">
                        <span class="type-label-lg">Выбрать лист</span>
                    </div>
                    <div class="droplist-content">
                        <router-link class="droplist-link" to="/">
                            <span class="type-label-lg">Демон лист</span>
                        </router-link>
                        <router-link class="droplist-link2" to="/ch">
                            <span class="type-label-lg">Челлендж лист</span>
                        </router-link>
                        <router-link class="droplist-link2" to="/pl">
                            <span class="type-label-lg">Платформер лист</span>
                        </router-link>
                    </div>
                </div>
                <router-link class="nav__tab" to="/leaderboard">
                    <span class="type-label-lg">Таблица лидеров</span>
                </router-link>
                <router-link class="nav__tab" to="/roulette">
                    <span class="type-label-lg">Рулетка</span>
                </router-link>
                <div class="nav__actions">
                    <button
                        class="nav__icon"
                        @click.prevent="store.toggleDark()"
                    >
                        <img
                            :src="store.dark ? '/assets/light.svg' : '/assets/dark.svg'"
                            alt=""
                        />
                    </button>
                    <a class="nav__icon" href="https://discord.gg/WvfUns3Egk">
                        <img src="./assets/discord.svg" alt="Discord Logo" />
                    </a>
                    <a class="nav__cta type-label-lg"
                        href="https://forms.gle/MpszzwAX2k8X8YNB7"
                        target="_blank">Отправить рекорд?</a>
                </div>
            </nav>
        </header>
        <router-view></router-view>
    </div>
</body>

</html>
