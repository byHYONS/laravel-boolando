<footer>
    <div class="container">
        <div class="d-flex">
            <!-- nome brand -->
            <div class="col-50">
                <h3> {{ menuFooter.nameBrand }} </h3>
                <div class="">
                    <ul class="policy">
                        <!-- policy -->
                        <li v-for="(policy, index) in menuFooter.menuItem" 
                        :key="index">
                        <a :href="`#${policy.toLocaleLowerCase()}`" >{{ policy }}</a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="col-50 social">
                <!-- social -->
                <h5> {{ menuFooter.messageSocial }} </h5>
                <img v-for="(socialIcon, index) in menuFooter.socialIcons" 
                :key="index" :src="socialIcon.image" 
                :alt="socialIcon.name">
            </div>
        </div>
    </div>
</footer>
