<style>
    * Mixin */

    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

    /* reset */
    * {
        padding: 0;
        margin: 0;
    }

    nav {
        background-color: #91cfa1;
        height: 50px;
        padding: 0 16px;
        display: -ms-flexbox;
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: center;
        align-items: center;
        /* fade in checked menu */
    }

    nav .m-menu__checkbox {
        display: none;
    }

    nav label.m-menu__toggle {
        cursor: pointer;
    }

    nav .m-menu {
        position: absolute;
        top: 0;
        left: 0;
        max-width: 450px;
        width: calc(100vw - 30px);
        height: 100%;
        -moz-transform: translate3d(-450px, 0, 0);
        -o-transform: translate3d(-450px, 0, 0);
        -ms-transform: translate3d(-450px, 0, 0);
        -webkit-transform: translate3d(-450px, 0, 0);
        transform: translate3d(-450px, 0, 0);
        -moz-transition: transform 0.35s;
        -o-transition: transform 0.35s;
        -webkit-transition: transform 0.35s;
        transition: transform 0.35s;
        z-index: 1;
        overflow: hidden;
        background-color: #fff;
    }

    nav .m-menu__overlay {
        background-color: rgba(103, 103, 103, 0.5);
        position: absolute;
        top: 0;
        width: 100%;
        bottom: 0;
        z-index: 1;
        display: none;
    }

    nav .m-menu__header {
        padding: 0 16px;
        height: 50px;
        display: -ms-flexbox;
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        -webkit-justify-content: space-around;
        justify-content: space-around;
        -ms-flex-pack: space-around;
        -webkit-align-items: center;
        align-items: center;
        border-bottom: 1px solid #e8e8e8;
    }

    nav .m-menu__header span {
        font-size: 1.2rem;
        font-weight: bold;
        text-align: center;
        width: 100%;
    }

    nav .m-menu .m-menu {
        -moz-transform: translate3d(480px, 0, 0);
        -o-transform: translate3d(480px, 0, 0);
        -ms-transform: translate3d(480px, 0, 0);
        -webkit-transform: translate3d(480px, 0, 0);
        transform: translate3d(480px, 0, 0);
    }

    nav .m-menu ul {
        height: 100%;
        overflow-y: auto;
        list-style-type: none;
    }

    nav .m-menu ul li label {
        font-size: 1.2rem;
        font-weight: bold;
        text-align: center;
        width: 100%;
    }



    nav .m-menu ul li a,
    nav .m-menu ul li label {
        display: block;
        text-align: left;
        padding: 0 15px;
        line-height: 47px;
        text-decoration: none;
        color: #333;
        cursor: pointer;
        font-size: 1rem;
        border-bottom: 1px solid #e8e8e8;
        position: relative;


    }


    nav .m-menu ul li .-invisible {
        border-bottom: 0;
    }

    nav .m-menu .m-menu label.m-menu__toggle {
        display: -ms-flexbox;
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        border-bottom: 0;
        padding: 0;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
    }

    nav .m-menu__checkbox:checked~.m-menu__overlay {
        display: block;
    }

    nav .m-menu__checkbox:checked~.m-menu {
        -moz-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .wrapper {
        width: 100%;
        height: 100%;
        margin: 0 auto;
        overflow: hidden;
        background-color: #fff;
        position: relative;
    }

    .wrapper h1 {
        color: #f1f1f1;
        margin-left: 10px ;

    }

    body {
        background-color: #f1f1f1;
        padding: 0;
        margin: 0;
        font-family: sans-serif;
    }
</style>

<div class="wrapper">
    <nav>
        <input type="checkbox" id="menu" name="menu" class="m-menu__checkbox">
        <label class="m-menu__toggle" for="menu">
            <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </label>
        <label class="m-menu__overlay" for="menu"></label>

        <div class="m-menu">
            <div class="m-menu__header">
                <label class="m-menu__toggle" for="menu">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </label>
                <span>MENU</span>
            </div>
            <ul>
                <li><label><a href="#">FREMAX</a></label></li>
                <li><label><a href="#">ACDELCO</a></label></li>
                <li><label><a href="#">COFAP</a></label></li>
                <li><label><a href="#">DELPHI</a></label></li>
                <li><label><a href="#">PERFECT</a></label></li>
                <li><label><a href="#">CONTINENTAL</a></label></li>

            </ul>
        </div>
        <h1>CATALOGO</h1>
        <h1>CATALOGO</h1>
        <p>CATALOGO</p>
    </nav>
    <table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>

</body>
</html>


</div>



