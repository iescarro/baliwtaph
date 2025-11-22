<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <?php echo anchor('.', '<span class="baliwta-logo">Baliwta</span><span class="ph-logo">PH</span>', 'class="navbar-brand"'); ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <?php echo anchor('.', 'Home', 'class="nav-link"'); ?>
                </li>
                <?php foreach ($categories as $category): ?>
                    <li class="nav-item">
                        <?php echo anchor(
                            'blog/home/category/' . $category->id . '/' . Util\Str::slug($category->name),
                            $category->name,
                            'class="nav-link"'
                        ); ?>
                    </li>
                <?php endforeach; ?>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Politics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Business</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Entertainment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Technology</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lifestyle</a>
                </li> -->
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search news...">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>