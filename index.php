
<?php
$heroes = [
    [
        "name" => "Iron Man",
        "real_name" => "Tony Stark",
        "category" => "Avenger",
        "icon" => "🤖",
        "color" => "#b83232",
        "power" => "Genius-level intellect, advanced armor, flight and repulsor blasts.",
        "abilities" => ["Powered Armor", "Flight", "Repulsor Rays", "Artificial Intelligence", "Super Genius"],
        "origin" => "A billionaire inventor who built a high-tech suit of armor to escape captivity and later became one of Earth's greatest defenders.",
        "weakness" => "Human vulnerability, technology dependence and limited armor energy."
    ],
    [
        "name" => "Thor",
        "real_name" => "Thor Odinson",
        "category" => "Avenger",
        "icon" => "⚡",
        "color" => "#3676b9",
        "power" => "Godlike strength, lightning manipulation and control over storms.",
        "abilities" => ["Superhuman Strength", "Lightning Control", "Flight", "Weather Manipulation", "Longevity"],
        "origin" => "The Asgardian God of Thunder who protects the Nine Realms and fights alongside the Avengers.",
        "weakness" => "Can be overpowered by stronger cosmic beings and powerful magic."
    ],
    [
        "name" => "Spider-Man",
        "real_name" => "Peter Parker",
        "category" => "Superhero",
        "icon" => "🕷️",
        "color" => "#c52d39",
        "power" => "Spider-like abilities, wall crawling, enhanced agility and danger sensing.",
        "abilities" => ["Spider-Sense", "Wall Crawling", "Super Strength", "Web Shooting", "Enhanced Agility"],
        "origin" => "A teenager bitten by a radioactive spider who uses his extraordinary abilities to protect New York City.",
        "weakness" => "Human durability, emotional pressure and limited resources."
    ],
    [
        "name" => "Hulk",
        "real_name" => "Bruce Banner",
        "category" => "Avenger",
        "icon" => "💚",
        "color" => "#438b47",
        "power" => "Massive physical strength that increases with anger.",
        "abilities" => ["Extreme Strength", "Regeneration", "Superhuman Durability", "Leaping", "Radiation Resistance"],
        "origin" => "A brilliant scientist transformed into a powerful green giant after exposure to gamma radiation.",
        "weakness" => "Emotional instability and difficulty controlling destructive impulses."
    ],
    [
        "name" => "Captain America",
        "real_name" => "Steve Rogers",
        "category" => "Avenger",
        "icon" => "🛡️",
        "color" => "#3766a9",
        "power" => "Enhanced human strength, speed, stamina and exceptional combat skills.",
        "abilities" => ["Super Soldier Strength", "Combat Mastery", "Tactical Intelligence", "Enhanced Reflexes", "Shield Mastery"],
        "origin" => "A courageous soldier transformed by the Super Soldier Serum who became a symbol of hope and leadership.",
        "weakness" => "Not invulnerable and can be overwhelmed by superior supernatural forces."
    ],
    [
        "name" => "Doctor Strange",
        "real_name" => "Stephen Strange",
        "category" => "Mystic",
        "icon" => "🔮",
        "color" => "#8950ad",
        "power" => "Mastery of mystical arts, spellcasting and manipulation of magical dimensions.",
        "abilities" => ["Spellcasting", "Portal Creation", "Astral Projection", "Mystic Shields", "Dimensional Travel"],
        "origin" => "A former neurosurgeon who discovered the mystic arts after a life-changing accident.",
        "weakness" => "Requires concentration and magical knowledge; some spells have significant risks."
    ],
    [
        "name" => "Black Panther",
        "real_name" => "T'Challa",
        "category" => "Avenger",
        "icon" => "🐾",
        "color" => "#6651a0",
        "power" => "Enhanced physical abilities, exceptional intelligence and Vibranium technology.",
        "abilities" => ["Enhanced Strength", "Superhuman Agility", "Vibranium Suit", "Combat Expertise", "Tracking"],
        "origin" => "The protector and king of Wakanda, equipped with advanced technology and the powers of the Heart-Shaped Herb.",
        "weakness" => "Still physically vulnerable to sufficiently powerful attacks."
    ],
    [
        "name" => "Scarlet Witch",
        "real_name" => "Wanda Maximoff",
        "category" => "Mystic",
        "icon" => "✨",
        "color" => "#a8324e",
        "power" => "Powerful chaos magic, reality manipulation and telekinesis.",
        "abilities" => ["Chaos Magic", "Telekinesis", "Energy Manipulation", "Reality Warping", "Mind Manipulation"],
        "origin" => "A powerful magic wielder whose abilities allow her to manipulate energy and, at times, reality itself.",
        "weakness" => "Emotional distress, loss of control and the physical or mental demands of powerful magic."
    ],
    [
        "name" => "Captain Marvel",
        "real_name" => "Carol Danvers",
        "category" => "Cosmic",
        "icon" => "🌟",
        "color" => "#bd8739",
        "power" => "Cosmic energy absorption, flight and tremendous superhuman strength.",
        "abilities" => ["Energy Projection", "Flight", "Super Strength", "Energy Absorption", "Durability"],
        "origin" => "A former Air Force pilot empowered by an extraordinary energy transformation.",
        "weakness" => "Power absorption and energy overload can affect her abilities."
    ],
    [
        "name" => "Ant-Man",
        "real_name" => "Scott Lang",
        "category" => "Avenger",
        "icon" => "🐜",
        "color" => "#b36c35",
        "power" => "Can shrink to microscopic sizes or grow to enormous proportions using Pym Particles.",
        "abilities" => ["Size Manipulation", "Giant Form", "Ant Communication", "Stealth", "Advanced Suit Technology"],
        "origin" => "A former thief who becomes a superhero using technology developed by Hank Pym.",
        "weakness" => "Technology dependence and risks associated with size manipulation."
    ],
    [
        "name" => "Wolverine",
        "real_name" => "Logan",
        "category" => "Mutant",
        "icon" => "🐺",
        "color" => "#9a8b3c",
        "power" => "Accelerated healing, enhanced senses and retractable Adamantium claws.",
        "abilities" => ["Regeneration", "Adamantium Claws", "Enhanced Senses", "Superhuman Strength", "Combat Mastery"],
        "origin" => "A mutant with an extraordinary healing factor who has endured decades of battles.",
        "weakness" => "Extreme attacks, drowning and certain powerful substances can overcome his healing."
    ],
    [
        "name" => "Deadpool",
        "real_name" => "Wade Wilson",
        "category" => "Antihero",
        "icon" => "💀",
        "color" => "#a72c35",
        "power" => "Extreme regeneration, combat skills and exceptional resistance to injury.",
        "abilities" => ["Regeneration", "Swordsmanship", "Marksmanship", "Agility", "Combat Skills"],
        "origin" => "A mercenary whose healing factor gives him extraordinary regenerative abilities.",
        "weakness" => "Can still experience pain and be restrained or incapacitated."
    ],
    [
        "name" => "Loki",
        "real_name" => "Loki Laufeyson",
        "category" => "Mystic",
        "icon" => "🐍",
        "color" => "#34765c",
        "power" => "Illusions, shapeshifting, sorcery and extraordinary intelligence.",
        "abilities" => ["Illusions", "Shapeshifting", "Sorcery", "Teleportation", "Superhuman Longevity"],
        "origin" => "The Asgardian trickster known for his intelligence, magic and complicated relationship with Thor.",
        "weakness" => "Overconfidence, deception and vulnerability to stronger magical forces."
    ]
];

$categories = ["All", "Avenger", "Superhero", "Mystic", "Cosmic", "Mutant", "Antihero"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MARVEL | Superhero Universe</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;600;700;800;900&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
:root {
    --red: #ed1d24;
    --dark: #090a0d;
    --card: #15171c;
    --muted: #9a9da6;
    --white: #fff;
}

* { margin: 0; padding: 0; box-sizing: border-box; }

html { scroll-behavior: smooth; }

body {
    background: var(--dark);
    color: var(--white);
    font-family: 'Inter', sans-serif;
    overflow-x: hidden;
}

a { color: inherit; text-decoration: none; }

.navbar {
    height: 76px;
    padding: 0 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(8,9,12,.95);
    border-bottom: 1px solid #25262b;
    position: sticky;
    top: 0;
    z-index: 100;
    backdrop-filter: blur(15px);
}

.logo {
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 34px;
    font-weight: 900;
    letter-spacing: -1px;
    background: var(--red);
    padding: 1px 9px;
    transform: skew(-5deg);
}

.logo span { color: white; }

.nav-links {
    display: flex;
    gap: 32px;
    list-style: none;
    font-size: 13px;
    font-weight: 700;
    color: #ccc;
    text-transform: uppercase;
}

.nav-links a:hover { color: var(--red); }

.nav-cta {
    background: var(--red);
    padding: 11px 19px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 800;
}

.hero {
    min-height: 610px;
    display: flex;
    align-items: center;
    padding: 90px 9%;
    position: relative;
    overflow: hidden;
    background:
      linear-gradient(90deg, rgba(8,9,12,1) 5%, rgba(8,9,12,.91) 38%, rgba(8,9,12,.24) 100%),
      linear-gradient(0deg, #090a0d, transparent 40%),
      url('https://wallpapercave.com/wp/wp2553439.jpg') center 35% / cover;
}

.hero-content { max-width: 620px; position: relative; z-index: 2; }

.eyebrow {
    color: var(--red);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 4px;
    margin-bottom: 20px;
}

.hero h1 {
    font-family: 'Barlow Condensed', sans-serif;
    font-size: clamp(65px, 9vw, 112px);
    font-weight: 900;
    line-height: .87;
    text-transform: uppercase;
    letter-spacing: -2px;
}

.hero h1 span {
    display: block;
    color: var(--red);
}

.hero p {
    color: #c3c3c8;
    max-width: 490px;
    line-height: 1.9;
    font-size: 14px;
    margin: 26px 0 32px;
}

.primary-btn {
    display: inline-block;
    padding: 15px 27px;
    background: var(--red);
    border-radius: 3px;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1px;
    transition: .3s;
}

.primary-btn:hover {
    background: white;
    color: #111;
    transform: translateY(-3px);
}

.hero-tag {
    display: inline-block;
    margin-left: 15px;
    color: #ddd;
    font-size: 11px;
    font-weight: 700;
}

.stats {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    padding: 28px 9%;
    background: #111318;
    border-top: 1px solid #25262b;
    border-bottom: 1px solid #25262b;
}

.stat { border-right: 1px solid #34363d; padding-left: 25px; }
.stat:first-child { padding-left: 0; }
.stat:last-child { border: 0; }

.stat h2 {
    font-family: 'Barlow Condensed',sans-serif;
    font-size: 35px;
    color: var(--red);
}

.stat p {
    font-size: 10px;
    color: #9b9ca3;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.section {
    padding: 90px 7%;
    max-width: 1600px;
    margin: auto;
}

.section-heading {
    display: flex;
    justify-content: space-between;
    align-items: end;
    margin-bottom: 35px;
    gap: 20px;
}

.section-heading h2 {
    font-family: 'Barlow Condensed',sans-serif;
    font-size: 48px;
    text-transform: uppercase;
}

.section-heading h2 span { color: var(--red); }

.section-heading p {
    color: var(--muted);
    font-size: 12px;
    margin-top: 7px;
}

.controls {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-bottom: 25px;
}

.search-box {
    flex: 1;
    min-width: 220px;
    padding: 14px 17px;
    background: #17191e;
    color: white;
    border: 1px solid #303139;
    border-radius: 4px;
    outline: none;
    font-family: inherit;
}

.search-box:focus { border-color: var(--red); }

.filter-btn {
    border: 1px solid #303139;
    color: #ccc;
    background: #17191e;
    padding: 12px 18px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    transition: .2s;
}

.filter-btn.active, .filter-btn:hover {
    background: var(--red);
    color: white;
    border-color: var(--red);
}

.hero-grid {
    display: grid;
    grid-template-columns: repeat(4,1fr);
    gap: 20px;
}

.hero-card {
    background: var(--card);
    border: 1px solid #282a30;
    border-radius: 6px;
    overflow: hidden;
    cursor: pointer;
    transition: .3s;
}

.hero-card:hover {
    transform: translateY(-8px);
    border-color: var(--red);
    box-shadow: 0 15px 35px #0008;
}

.card-art {
    height: 220px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    background:
      radial-gradient(circle at 50% 45%, var(--hero-color), transparent 60%),
      linear-gradient(145deg,#25252b,#101116);
}

.card-art::before {
    content: "";
    width: 180px;
    height: 180px;
    position: absolute;
    border: 1px solid #ffffff30;
    border-radius: 50%;
    box-shadow: 0 0 0 18px #ffffff08, 0 0 0 38px #ffffff05;
}

.card-icon {
    position: relative;
    font-size: 94px;
    filter: drop-shadow(0 10px 12px #0009);
    transition: .3s;
}

.hero-card:hover .card-icon { transform: scale(1.13); }

.card-category {
    position: absolute;
    left: 13px;
    top: 13px;
    background: #08090dc9;
    color: #fff;
    padding: 7px 10px;
    border-radius: 3px;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 1px;
}

.card-info { padding: 19px; }

.card-info h3 {
    font-family: 'Barlow Condensed',sans-serif;
    font-size: 27px;
    text-transform: uppercase;
}

.real-name {
    font-size: 11px;
    color: var(--muted);
    margin: 5px 0 15px;
}

.card-power {
    font-size: 11px;
    color: #c2c3c9;
    line-height: 1.7;
    min-height: 58px;
}

.card-footer {
    margin-top: 18px;
    padding-top: 13px;
    border-top: 1px solid #303139;
    display: flex;
    justify-content: space-between;
    color: var(--red);
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1px;
}

.no-results {
    display: none;
    text-align: center;
    padding: 60px;
    color: var(--muted);
    grid-column: 1/-1;
}

.feature {
    background:
      linear-gradient(90deg,#111318 10%,#111318ee 55%,#11131866),
      url('https://images.hdqwalls.com/download/avengers-assemble-artwork-4k-vp-2560x1440.jpg') center/cover;
    padding: 75px 9%;
    border-top: 1px solid #303139;
    border-bottom: 1px solid #303139;
}

.feature h2 {
    font-family: 'Barlow Condensed',sans-serif;
    font-size: 55px;
    max-width: 600px;
    text-transform: uppercase;
    line-height: .98;
}

.feature h2 span { color: var(--red); }

.feature p {
    max-width: 520px;
    margin: 20px 0 27px;
    color: #bcbec5;
    line-height: 1.8;
    font-size: 13px;
}

.footer {
    background: #06070a;
    padding: 40px 7%;
    text-align: center;
    border-top: 1px solid #25262b;
}

.footer .logo { display: inline-block; margin-bottom: 17px; }

.footer p {
    color: #747780;
    font-size: 11px;
    line-height: 1.9;
}

.modal {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 300;
    background: #000d;
    align-items: center;
    justify-content: center;
    padding: 20px;
    backdrop-filter: blur(8px);
}

.modal.show { display: flex; }

.modal-content {
    width: 100%;
    max-width: 650px;
    max-height: 90vh;
    overflow-y: auto;
    background: #15171d;
    border: 1px solid #393b43;
    border-top: 4px solid var(--red);
    border-radius: 7px;
    padding: 30px;
    position: relative;
    animation: appear .25s ease;
}

@keyframes appear {
    from { transform: translateY(20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

.close-modal {
    position: absolute;
    right: 20px;
    top: 15px;
    background: none;
    color: white;
    border: none;
    font-size: 28px;
    cursor: pointer;
}

.modal-icon { font-size: 65px; margin-bottom: 12px; }

.modal-content h2 {
    font-family: 'Barlow Condensed',sans-serif;
    font-size: 42px;
    text-transform: uppercase;
}

.modal-content h4 {
    color: var(--red);
    font-size: 11px;
    margin: 22px 0 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.modal-content p, .modal-content li {
    color: #c3c5cc;
    font-size: 12px;
    line-height: 1.9;
}

.modal-content ul { padding-left: 20px; }

@media(max-width:1050px) {
    .hero-grid { grid-template-columns: repeat(3,1fr); }
}

@media(max-width:750px) {
    .navbar { padding: 0 5%; }
    .nav-links { display: none; }
    .hero { min-height: 560px; padding: 70px 7%; background-position: 58% center; }
    .stats { padding: 25px 5%; }
    .stat { padding-left: 12px; }
    .stat h2 { font-size: 28px; }
    .stat p { font-size: 8px; letter-spacing: 1px; }
    .section { padding: 65px 5%; }
    .section-heading h2 { font-size: 39px; }
    .hero-grid { grid-template-columns: repeat(2,1fr); gap: 12px; }
    .card-art { height: 170px; }
    .card-icon { font-size: 70px; }
    .card-info { padding: 13px; }
    .card-info h3 { font-size: 23px; }
    .feature { padding: 65px 7%; }
}

@media(max-width:430px) {
    .hero-grid { grid-template-columns: 1fr; }
    .card-art { height: 220px; }
    .section-heading { align-items: start; flex-direction: column; }
    .hero-tag { display: block; margin: 16px 0 0; }
}
</style>
</head>

<body>

<header class="navbar">
    <a href="#" class="logo">MARVEL<span>®</span></a>

    <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#heroes">Superheroes</a></li>
        <li><a href="#universe">Universe</a></li>
    </ul>

    <a href="#heroes" class="nav-cta">EXPLORE HEROES</a>
</header>

<section class="hero" id="home">
    <div class="hero-content">
        <div class="eyebrow">WELCOME TO THE MULTIVERSE</div>
        <h1>THE WORLD<br>NEEDS <span>HEROES.</span></h1>
        <p>
            Discover legendary superheroes, explore extraordinary powers,
            and uncover the stories behind Earth's mightiest defenders.
            Your journey into the Marvel-inspired universe begins here.
        </p>
        <a href="#heroes" class="primary-btn">DISCOVER HEROES →</a>
        <span class="hero-tag">ONE UNIVERSE. ENDLESS POSSIBILITIES.</span>
    </div>
</section>

<section class="stats">
    <div class="stat">
        <h2><?php echo count($heroes); ?>+</h2>
        <p>Featured Characters</p>
    </div>
    <div class="stat">
        <h2>06</h2>
        <p>Hero Categories</p>
    </div>
    <div class="stat">
        <h2>∞</h2>
        <p>Superpowers</p>
    </div>
</section>

<main>
<section class="section" id="heroes">

    <div class="section-heading">
        <div>
            <div class="eyebrow">MEET THE LEGENDS</div>
            <h2>EXPLORE <span>SUPERHEROES</span></h2>
            <p>Discover their identities, abilities and extraordinary powers.</p>
        </div>
        <p id="resultCount"><?php echo count($heroes); ?> HEROES FOUND</p>
    </div>

    <div class="controls">
        <input
            type="text"
            class="search-box"
            id="heroSearch"
            placeholder="Search superheroes or powers..."
            aria-label="Search superheroes"
        >
    </div>

    <div class="controls" id="filters">
        <?php foreach ($categories as $index => $category): ?>
            <button
                class="filter-btn <?php echo $index === 0 ? 'active' : ''; ?>"
                data-category="<?php echo htmlspecialchars($category); ?>"
            >
                <?php echo htmlspecialchars($category); ?>
            </button>
        <?php endforeach; ?>
    </div>

    <div class="hero-grid" id="heroGrid">

        <?php foreach ($heroes as $index => $hero): ?>
            <article
                class="hero-card"
                data-index="<?php echo $index; ?>"
                data-name="<?php echo htmlspecialchars(strtolower($hero['name'] . ' ' . $hero['real_name'] . ' ' . $hero['power'] . ' ' . implode(' ', $hero['abilities']))); ?>"
                data-category="<?php echo htmlspecialchars($hero['category']); ?>"
            >
                <div class="card-art" style="--hero-color: <?php echo htmlspecialchars($hero['color']); ?>">
                    <span class="card-category">
                        <?php echo htmlspecialchars(strtoupper($hero['category'])); ?>
                    </span>
                    <div class="card-icon">
                        <?php echo htmlspecialchars($hero['icon']); ?>
                    </div>
                </div>

                <div class="card-info">
                    <h3><?php echo htmlspecialchars($hero['name']); ?></h3>
                    <div class="real-name">
                        <?php echo htmlspecialchars($hero['real_name']); ?>
                    </div>

                    <p class="card-power">
                        <?php echo htmlspecialchars($hero['power']); ?>
                    </p>

                    <div class="card-footer">
                        <span>VIEW PROFILE</span>
                        <span>↗</span>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>

        <div class="no-results" id="noResults">
            <h2>No heroes found!</h2>
            <p>Try searching with a different name or power.</p>
        </div>

    </div>
</section>

<section class="feature" id="universe">
    <div class="eyebrow">BEYOND THE ORDINARY</div>
    <h2>GREAT POWER.<br><span>GREATER RESPONSIBILITY.</span></h2>
    <p>
        From the genius of Tony Stark to the cosmic power of Thor,
        every hero has a unique story. Explore the abilities, strengths
        and weaknesses that make these characters legendary.
    </p>
    <a href="#heroes" class="primary-btn">EXPLORE THE UNIVERSE →</a>
</section>
</main>

<footer class="footer">
    <div class="logo">MARVEL<span>®</span></div>
    <p>A SUPERHERO FAN PROJECT</p>
    <p>Character names and related properties belong to their respective owners.
       This is an unofficial fan-made informational website and is not affiliated
       with or endorsed by Marvel Entertainment.</p>
    <p style="margin-top:15px;">© <?php echo date("Y"); ?> Superhero Universe. Built with PHP.</p>
</footer>

<!-- Superhero detail popup -->
<div class="modal" id="heroModal" role="dialog" aria-modal="true" aria-labelledby="modalName">
    <div class="modal-content">
        <button class="close-modal" id="closeModal" aria-label="Close">&times;</button>

        <div class="modal-icon" id="modalIcon"></div>
        <div class="eyebrow" id="modalCategory"></div>
        <h2 id="modalName"></h2>
        <p id="modalRealName"></p>

        <h4>Superpowers</h4>
        <p id="modalPower"></p>

        <h4>Special Abilities</h4>
        <ul id="modalAbilities"></ul>

        <h4>Origin Story</h4>
        <p id="modalOrigin"></p>

        <h4>Weaknesses</h4>
        <p id="modalWeakness"></p>
    </div>
</div>

<script>
// Superhero information generated from PHP
const heroes = <?php echo json_encode(
    $heroes,
    JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP
); ?>;

const searchInput = document.getElementById('heroSearch');
const filterButtons = document.querySelectorAll('.filter-btn');
const cards = document.querySelectorAll('.hero-card');
const noResults = document.getElementById('noResults');
const resultCount = document.getElementById('resultCount');

let activeCategory = 'All';

function filterHeroes() {
    const search = searchInput.value.toLowerCase().trim();
    let visibleCount = 0;

    cards.forEach(card => {
        const matchesSearch = card.dataset.name.includes(search);
        const matchesCategory =
            activeCategory === 'All' ||
            card.dataset.category === activeCategory;

        const visible = matchesSearch && matchesCategory;

        card.style.display = visible ? '' : 'none';

        if (visible) visibleCount++;
    });

    noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    resultCount.textContent = visibleCount + ' HEROES FOUND';
}

searchInput.addEventListener('input', filterHeroes);

filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        filterButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        activeCategory = button.dataset.category;
        filterHeroes();
    });
});

// Open detailed superhero profile
const modal = document.getElementById('heroModal');

cards.forEach(card => {
    card.addEventListener('click', () => {
        const hero = heroes[Number(card.dataset.index)];

        document.getElementById('modalIcon').textContent = hero.icon;
        document.getElementById('modalCategory').textContent = hero.category;
        document.getElementById('modalName').textContent = hero.name;
        document.getElementById('modalRealName').textContent =
            'Real Identity: ' + hero.real_name;

        document.getElementById('modalPower').textContent = hero.power;
        document.getElementById('modalOrigin').textContent = hero.origin;
        document.getElementById('modalWeakness').textContent = hero.weakness;

        const abilities = document.getElementById('modalAbilities');
        abilities.replaceChildren();

        hero.abilities.forEach(ability => {
            const li = document.createElement('li');
            li.textContent = ability;
            abilities.appendChild(li);
        });

        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
        document.getElementById('closeModal').focus();
    });
});

function closeModal() {
    modal.classList.remove('show');
    document.body.style.overflow = '';
}

document.getElementById('closeModal').addEventListener('click', closeModal);

modal.addEventListener('click', event => {
    if (event.target === modal) closeModal();
});

document.addEventListener('keydown', event => {
    if (event.key === 'Escape') closeModal();
});
</script>

</body>
</html>
