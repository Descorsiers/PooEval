<!-- <?php echo var_dump($data) ?> -->
<header class="header">
    <div class="create__forum">
        <a href="">
            Créer un forum
        </a>
    </div>
    <div class="title__container">
        <h1 class="title">
            BlogMania
        </h1>
    </div>
    <div class="user__container">
        <p class="user">Nom Prénom</p>
    </div>
</header>
<main>
    <div class="forum__container">
        <?php foreach($data['blogs'] as $blog): ?>
            <div class="forum__content">
                <div class="forum__title-container">
                    <h2 class="forum__title">
                        <a href="forum?id=<?php echo $blog['id'] ?>">
                        <?php echo $blog['title'] ?>
                        </a>
                    </h2>
                </div>
                <div class="forum__information-container">
                    <p class="forum__date">
                        <?php echo $blog['created_at'] ?>
                    </p>
                    <p class="forum__nbr__messages">
                        Nombre de message
                    </p>
                </div>
            </div>
        <?php endforeach ?>    
    </div>
</main>