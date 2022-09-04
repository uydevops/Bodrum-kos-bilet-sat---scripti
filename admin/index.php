<?php include 'theme/head.php'; ?>

<?php include 'theme/siderbar.php'; ?>
<?php include 'theme/top.php'; ?>

<?php include 'theme/card.php'; ?>

<?php

$duyuru=$db->prepare("SELECT *FROM duyuru");
$duyuru->execute();
$alert=$duyuru->fetch(PDO::FETCH_ASSOC);


?>

<form action="islemler/update.php" method="post">
    
      <div class="form-group">
        <label class="form-label">Duyuru Metini <i class="fas fa-comment" style="color:blue"></i></i></label>
            <textarea class="ckeditor" name="duyuru_metin" cols="30" rows="10"><?php echo $alert["metin"]; ?></textarea>
        </div>
        <lable> Görünürlük</lable>
        <div class="form-group">
            <label class="switch">
                
  <input type="checkbox" name="visible" <?php if($alert["visible"]=="on"){echo 'checked="checked"';} ?>>
  <span class="slider round"></span>
</label>
        </div>
   <button type="submit" name="duyuru" class="w-100 btn btn-primary">Kaydet</button>&nbsp;        
   </form>
  
        
        
        
        
        
        
        
        <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked+.slider {
  background-color: #E21C90;
}

input:focus+.slider {
  box-shadow: 0 0 1px #2196F3;
  background-color: #E21C90;
}

input:checked+.slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}


/* Rounded sliders */

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
        </style>
    


<dashboard class="dashboard">
    <dashboard-header title="Bodrum Kos Servers">
        <dashboard-clock digital="true" binary="true" />
    </dashboard-header>
    <server-list>
        <server v-for="(server, index) in servers" :class="{ 'has-failed': !server.status }" :type="server.type" @click.native="updateServerStatus(index)">
            <span slot="name" class="data">{{server.name}}</span>
            <span slot="status" class="data signal">{{server.status ? 'ONLINE' : 'OFFLINE'}}</span>
            <span slot="adr" class="data">{{server.adr}}</span>
        </server>
    </server-list>
</dashboard>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vuex/2.0.0/vuex.min.js'></script>
<script src="./script.js"></script>




<style>
    @import url("https://fonts.googleapis.com/css?family=Lato:300,300italic");
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css");
* {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  cursor: default;
}



body::-webkit-scrollbar {
  width: 5px;
}

::-webkit-scrollbar-track {
  background: #110d0d;
}

::-webkit-scrollbar-thumb {
  background: #888;
}

.dashboard {
  display: block;
  max-width: 1024px;
  margin: 0 auto;
}
.dashboard-header {
  display: flex;
  align-items: center;
  font-family: "Lato", sans-serif;
  text-transform: uppercase;
}
.dashboard-title {
  flex: 1;
  font-size: 2.5rem;
}
.dashboard-clock {
  display: flex;
  align-items: center;
}
.dashboard-clock-digital {
  font-weight: bold;
  font-size: 2.5rem;
}
.dashboard-clock-binary {
  margin-left: 8px;
  border-collapse: separate;
}
.dashboard-clock-binary td {
  height: 0.4rem;
  width: 0.4rem;
  background-color: rgba(255, 255, 255, 0.2);
  border-radius: 50%;
}
.dashboard-clock-binary .num1 {
  background-color: #2eb35a;
}

.server {
  display: flex;
  align-items: center;
  padding: 10px 0;
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  white-space: nowrap;
  background-color: rgba(255, 255, 255, 0.1);
}
.server-icon {
  display: inline-block;
  font-size: 2.5rem;
  margin: 0 2rem;
}
.server-details {
  flex: 1;
  display: block;
  list-style: none;
  margin: 0;
  padding: 0;
}
.server-details li {
  display: block;
  font-size: 1.2rem;
  line-height: 1.5;
  color: #7e8794;
}
.server-details li:last-child .data {
  font-weight: normal;
  color: rgba(230, 245, 255, 0.32);
}
.server-details .data {
  display: block;
  margin: -1.7rem 0 0 0;
  padding: 0 1rem 0 0;
  font-weight: 600;
  text-align: right;
  color: #c1c6cb;
}
.server-details .signal {
  color: #2eb35a;
}
.server-details .signal::before {
  content: "";
  display: inline-block;
  width: 0.6rem;
  height: 0.6rem;
  background-color: currentColor;
  border-radius: 50%;
  margin-right: 0.5rem;
  margin-top: -0.2rem;
  vertical-align: middle;
}
.server-list {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(25rem, 1fr));
  grid-gap: 2rem;
}
.server.has-failed {
  box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
  border-color: #d22c32;
  -webkit-animation: alertblink 2s ease-in-out infinite;
          animation: alertblink 2s ease-in-out infinite;
}
.server.has-failed .server-icon,
.server.has-failed .signal {
  color: #d22c32;
}
.server.has-failed:hover {
  background-color: rgba(210, 44, 50, 0.2);
  -webkit-animation: none;
          animation: none;
}

@-webkit-keyframes alertblink {
  0% {
    background: rgba(210, 44, 50, 0);
  }
  50% {
    background: rgba(210, 44, 50, 0.2);
  }
  100% {
    background: rgba(210, 44, 50, 0);
  }
}

@keyframes alertblink {
  0% {
    background: rgba(210, 44, 50, 0);
  }
  50% {
    background: rgba(210, 44, 50, 0.2);
  }
  100% {
    background: rgba(210, 44, 50, 0);
  }
}
</style>

<script>
    const store = new Vuex.Store({
  state: {
    servers: [
    { name: "Marina Sunucu", status: true, adr: 'hp625-ubuntu.local', type: 'database' },
    { name: "Hava Durumu Sunucusu", status: true, adr: 'raspberryweather.local', type: 'database' },
    { name: 'Bug Kontrol', status: true, adr: 'raspberryweather.local', type: 'database' },
    { name: "Veri Tabanı Hata Kontrol", status: true, adr: '192.168.0.37', type: 'database' },
    { name: 'Site Trafik Analizi', status: true, adr: '192.168.0.17', type: 'database' },
    { name: "Güvenlik Duvarı" , status: true, adr: 'qe27zmmto23yzj3ldykjmy73utf5.onion' },
    { name: "Site Sağlık", status: true, adr: '192.168.0.47'},
    { name: 'Site Control', status: true, adr: '192.168.0.127' }] },


  mutations: {
    UPDATE_SERVER_STATUS(state, payload) {
      state.servers[payload].status ^= true;
    } },

  actions: {
    serverStatus({ commit }, server) {
      commit('UPDATE_SERVER_STATUS', server);
    } } });



Vue.component('dashboard-clock', {
  props: {
    digital: {
      default: true,
      type: Boolean },

    binary: {
      default: false,
      type: Boolean } },


  data() {
    return {
      time: '' };

  },
  template: `
    <div class='dashboard-clock'>
        <div v-if="digital" class="dashboard-clock-digital">{{time}}</div>
        <table v-if="binary" class="dashboard-clock-binary">
            <tr class='hours'>
                <td v-for='n in 6'></td>
            </tr>
            <tr class='minutes'>
                <td v-for='n in 6'></td>
            </tr>
            <tr class='seconds'>
                <td v-for='n in 6'></td>
            </tr>
        </table>
    </div>
    `,
  mounted: function () {
    window.setInterval(this.render, 1000);
  },
  methods: {
    render() {
      const d = new Date();
      const h = d.getHours();
      const m = d.getMinutes();
      const s = d.getSeconds();

      this.time = `${this.addZero(h)} : ${this.addZero(m)} : ${this.addZero(s)}`;

      this.light(this.convert(s), '.seconds');
      this.light(this.convert(m), '.minutes');
      this.light(this.convert(h), '.hours');
    },
    convert(num) {
      let bin = "";
      let conv = [];

      while (num > 0) {
        bin = num % 2 + bin;
        num = Math.floor(num / 2);
      }

      conv = bin.split('');

      while (conv.length < 6) {
        conv.unshift("0");
      }

      return conv;
    },
    light(array, type) {
      $(type + ' td').attr('class', 'num0');
      for (var i = 0; i < array.length; i++) {
        $(type + ' td:eq(' + i + ')').attr('class', 'num' + array[i]);
      }
    },
    addZero(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    } } });



Vue.component('dashboard-header', {
  props: ['title'],
  template: `
    <header class="dashboard-header">
        <h1 class="dashboard-title">{{title}}</h1>
        <slot></slot>
    </header>
    ` });


Vue.component('server-list', {
  template: '<div class="server-list"><slot></slot></div>' });


Vue.component('server', {
  props: ['type'],
  template: `
    <div class="server">
        <div class="server-icon fa" 
            :class="'fa-' + (type === 'database' ? 'tasks' : 'globe')">
        </div>
        <ul class="server-details">
            <li>Hostname:<slot name="name"></slot></li>                         
            <li>Status:<slot name="status"></slot></li>
            <li>Address:<slot name="adr"></slot></li>
        </ul>
    </div>` });


//Vue.use(Vuex);
const dashboard = new Vue({
  el: 'dashboard',
  data: () => {
    return {
      servers: store.state.servers };

  },
  methods: {
    updateServerStatus(server) {
      store.dispatch('serverStatus', server);
    } },

  mounted() {
    setInterval(() =>
    store.dispatch('serverStatus',
    Math.floor(Math.random() * (this.servers.length - 0) + 0)),
    5000);
  } });
</script>
<!-- End of Main Content -->

<?php include 'theme/footer.php'; ?>