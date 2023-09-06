<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    :root {
      --lightgray: #eef0eb;
    }

    *,
    ::before,
    ::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      font-size: 10px;
      scroll-behavior: smooth;
    }
    ::-webkit-scrollbar {
      display: none;
    }

    body {
      background-color: #f4f7f5;
      font-size: 1.3rem;
      color: #635d5c;
      overflow-x: hidden;
      width: 100vw;
      line-height: 1.5;
      font-family: "Verdana", sans-serif;
    }

    ul {
      list-style: none;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    i {
      font-size: 1.5rem;
    }

    #wrapper {
      width: 100%;
      overflow: hidden;
      position: relative;
      display: grid;
      grid-template-columns: max-content 1fr;
      gap: 1.5rem;
      padding: 1.5rem;
    }

    #menu {
      margin: 0;
      background-color: var(--lightgray);
      height: calc(100vh - 2 * (1.5rem));
      border-radius: 1rem;
      overflow-y: auto;
      transition: all 250ms ease-in-out;
    }

    #menu-btn {
      transform: scale(1.5);
      cursor: pointer;
      opacity: 0.5;
    }
    #menu-btn:hover {
      opacity: 1;
    }

    .open .nav-list p,
    .open .nav-text,
    .open .task-count {
      display: block;
    }

    header,
    nav,
    .container {
      width: 100%;
    }

    header {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.5rem 1rem;
    }

    nav {
      padding: 0 2rem;
      display: flex;
      flex-direction: column;
    }

    .nav-list p,
    .nav-text,
    .task-count {
      display: none;
    }

    .nav-list {
      padding: 1rem 0;
    }

    .nav-list-name {
      text-transform: uppercase;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .nav-list li {
      width: 100%;
    }

    .nav-link {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0.5rem 0;
      text-transform: capitalize;
      font-weight: 600;
    }
    .open .nav-link {
      justify-content: space-between;
    }

    .nav-link:hover {
      color: #000307;
    }

    .icon-text {
      display: flex;
      align-items: center;
    }

    .missed {
      color: #d60b0f;
    }

    .icon-text span {
      margin: 0 0.5rem 0 0;
    }

    .task-count {
      background-color: #635d5c;
      border-radius: 25%;
      padding: 0.1rem 0.5em;
      color: #fff;
      opacity: 0.75;
    }
    .nav-link:hover .task-count {
      opacity: 0.95;
    }

    .btn,
    .add {
      border: none;
      padding: 1rem 1.5rem;
      border-radius: 0.5rem;
      font-size: 1.4rem;
      text-transform: uppercase;
      font-weight: bold;
      letter-spacing: 0.5px;
      transition: opacity 200ms;
      color: #fff;
      margin: 0.5rem 0;
      cursor: pointer;
    }

    .add {
      background-color: #23ce6b;
      color: #fff;
    }

    .square {
      display: inline-block;
      border-radius: 0.2rem;
      width: 12px;
      height: 12px;
      margin-right: 0.5rem;
    }

    .lists li:last-of-type {
      font-size: 1.25rem;
    }

    main {
      height: calc(100vh - 3rem);
      overflow-y: auto;
    }

    .container {
      width: 100%;
    }

    .tasks {
      width: 100%;
      display: grid;
      grid-template-columns: repeat(2, minmax(min-content, auto));
      column-gap: 1.5rem;
    }

    .task {
      padding: 1.5rem 1rem;
      border: 1px solid #eef0eb;
      border-radius: 1rem;
      margin-bottom: 1rem;
      position: relative;
      transition: all 200ms;
    }

    .completed {
      filter: brightness(60%);
    }
    .task:hover {
      border: 1px solid #635d5c;
    }

    .red,
    .green,
    .blue,
    .cyan,
    .purple {
      color: #fff;
    }

    .task h3,
    .task p {
      margin-bottom: 0.75rem;
    }

    .task-time {
      position: absolute;
      top: 1.5rem;
      right: 1.5rem;
      opacity: 0.75;
    }

    .btn:hover,
    .btn:focus {
      opacity: 0.75;
    }

    .done {
      background-color: #23ce6b;
    }

    .change {
      background-color: #521945;
    }

    .delete {
      background-color: #d60b0f;
    }
  </style>
</head>

<body>
  <div id="wrapper">
    <div id="menu" class="open">
      <header>
        
        <!--         <span id="menu-btn"></span> -->
      </header>
      <nav>
        <ul class="nav-list">
          <p class="nav-list-name">Tasks</p>
          <li>
            <a href="#today" class="nav-link">
              <span class="icon-text">
                <span class="nav-icon"><i class="bi bi-chevron-double-right"></i></span>
                <span class="nav-text">Today</span>
              </span>
              <span class="task-count">2</span>
            </a>
          </li>
          <li>
            <a href="#upcoming" class="nav-link">
              <span class="icon-text">
                <span class="nav-icon"><i class="bi bi-list-check"></i></span>
                <span class="nav-text">Upcoming</span>
              </span>
              <span class="task-count">1</span>
            </a>
          </li>
          <li>
            <a href="#missed" class="nav-link">
              <span class="icon-text">
                <span class="nav-icon missed"><i class="bi bi-exclamation-circle-fill"></i></span>
                <span class="nav-text">Missed</span>
              </span>
              <span class="task-count">1</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link btn add" id="add-task-btn">
              <span class="icon-text">
                <span class="nav-icon"><i class="bi bi-plus-lg"></i></span>
                <span class="nav-text">Add new task</span>
              </span>
            </a>
          </li>
        </ul>
        <ul class="nav-list">
          <p class="nav-list-name">Lists</p>
          <li>
            <a href="#" class="nav-link">
              <span class="icon-text">
                <span class="nav-icon square blue"></span>
                <span class="nav-text">Personal</span>
              </span>
              <span class="task-count">3</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link">
              <span class="icon-text">
                <span class="nav-icon square orange"></span>
                <span class="nav-text">Work</span>
              </span>
              <span class="task-count">1</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link add" id="add-list-btn">
              <span class="icon-text">
                <span class="nav-icon"><i class="bi bi-plus-lg"></i></span>
                <span class="nav-text">Add new list</span>
              </span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <main id="main">
    <span id="menu-btn"><i class="bi bi-list"></i></span>
      
    </main>
   
    <script>

        /* ======= RESPONSIVNESS ======= */
        let menuBtn = document.getElementById("menu-btn");
        let menu = document.getElementById("menu");
        menuBtn.addEventListener("click", () => {
        menu.classList.toggle("open");
        menu.classList.toggle("visible");
        });

        window.addEventListener("resize", responsive);

        // Alternative to DOMContentLoaded event
        document.onreadystatechange = () => {
        responsive();
        };

        // Make the nav menu responsive;
        function responsive() {
        let w = window.innerWidth;
        if (w <= 850) {
            if (menu.classList.contains("open")) {
            menu.classList.remove("open");
            }
        } else if (w > 650) {
            if (!menu.classList.contains("open")) {
            menu.classList.add("open");
            }
        }
        }
    </script>
</body>
</html>