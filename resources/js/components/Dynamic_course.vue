<template>
<div class="col-xs-12 col-sm-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{courseName}}</h3>
        </div>
        <div class="panel-body">
            <div v-if="pageNumber == 0">
                <p v-if="errorFirst" class="alert alert-danger">Name and Email are required.</p>
                <p>Please fill in the form below and then click submit to start the course.</p>
                <div class="col-xs-6">
                    <div class="form-group col-xs-12">
                        <label for="name">Name</label>
                        <input type="text" v-model="name" class="form-control" name="name" placeholder="Name" value="">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="contactNumber">Contact Number</label>
                        <input type="text" class="form-control" v-model="contactNumber" name="contactNumber" placeholder="Contact Number" value="">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" v-model="company" name="company" placeholder="Company" value="">
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group col-xs-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" v-model="email" name="email" placeholder="Email" value="">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="position">Position in Company</label>
                        <input type="text" class="form-control" v-model="position" name="position" placeholder="Position" value="">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="address">Address</label>
                        <textarea type="text" class="form-control" v-model="address" name="address" placeholder="Your Address"></textarea>
                    </div>
                </div>
                <input type="submit" v-on:click="pressFirstNext" class="btn btn-success col-xs-12" name="submit">
            </div>
            <div v-for="page in coursePages">
                <div v-if="page.id == pageNumber">
                    <div v-html="page.content"></div>
                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }}</div>
                    <div class="form-group" id="next">
                        <a href="#" v-on:click="pressAccept" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div class="form-group" style="margin-top: 95px;" v-if="pageAccepted">
                        <label>Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input type="text" class="form-control" v-model="inputShortQuestion" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;">
                                <a v-on:click="pressPrevious" href="#">Previous</a>
                            </li>
                            <li v-if="inputShortQuestion.toLowerCase() == 'yes'" style="display: inline;">
                                <a href="#" v-on:click="pressNext">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div v-if="summary == true">
                <h2>Summary</h2>
                <p><strong>If you have any other questions or need any other support. Please call {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></strong></p>
                <p><strong>In any case, we shall be in touch to establish any other support.</strong></p>
                <p>If your details below are correct, please click on the submit bar below to send your details.</p>
                <div class="col-xs-6">
                    <div class="form-group col-xs-12">
                        <label for="name">Name</label>
                        <input type="text" v-model="name" class="form-control" id="name" name="name" placeholder="Name" value="">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="contactNumber">Contact Number</label>
                        <input type="text" class="form-control" v-model="contactNumber" id="contactNumber" name="contactNumber" placeholder="Contact Number" value="">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" v-model="company" id="company" name="company" placeholder="Company" value="">
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group col-xs-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" v-model="email" name="email" id="email" placeholder="Email" value="">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="position">Position in Company</label>
                        <input type="text" class="form-control" v-model="position" name="position" placeholder="Position" value="">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="address">Address</label>
                        <textarea type="text" class="form-control" v-model="address" name="address" id="address" style="height: 114px" placeholder="Your Address"></textarea>
                    </div>
                </div>
                <input type="submit" v-on:click="submitForm" class="btn btn-success col-xs-12" name="submit">
            </div>
            <div v-if="last == true">
                <div class="alert alert-success">
                    Thank you, Your details have been sent!
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {

    data() {
        return {
            name: '',
            email: '',
            contactNumber: '',
            company: '',
            address: '',
            position: '',
            pageNumber: 0,
            inputShortQuestion: '',
            coursePages: [],
            pageAccepted: false,
            errorFirst: false,
            summary: false,
            last: false
        }
    },
    props: ['contactName', 'companyNumber', 'adminEmail', 'pagesUrl','sendUrl', 'courseTopics' ,'courseName'],
    methods: {
        pressAccept: function(){
            this.pageAccepted = true;
        },
        pressPrevious: function(){
            this.pageAccepted = false;
            this.inputShortQuestion = "";
            this.pageNumber = this.pageNumber - 1;
        },
        pressFirstNext: function(){
            if(this.name != "" && this.email != ""){
                this.errorFirst = false;
                this.pageNumber = this.pageNumber + 1;
            }else{
                this.errorFirst = true;
            }
        },
        pressNext: function(){
            this.pageAccepted = false;
            this.inputShortQuestion = "";
            this.pageNumber = this.pageNumber + 1;
            if(this.pageNumber > this.coursePages.length){
                this.summary = true;
            }
        },
        getPageData: function(){
            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-CSRF-TOKEN': window.Laravel.csrfToken
                }
            };
            axios.get(this.pagesUrl).then(response => {
                this.coursePages = response.body;
            });
        },
        submitForm: function() {
            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-CSRF-TOKEN': window.Laravel.csrfToken
                }
            };
            var formData = new FormData();
            formData.append("name", this.name);
            formData.append("email", this.email);
            formData.append("contactNumber", this.contactNumber);
            formData.append("company", this.company);
            formData.append("address", this.address);
            formData.append("position", this.position);
            formData.append("courseName", this.courseName);
            formData.append("courseTopics", this.courseTopics);
            axios.post(this.sendUrl, formData, config);
            this.summary = false;
            this.last = true;
        },
    },
    mounted() {
        this.getPageData()
    }
}
</script>
