<template>
    <div class="card roster__card text-primary">
        <div class="card-body">
            <span class="card-text roster__text">
                <div class="row">
                    <div class="col-3">
                        <img class="roster__image" src="https://via.placeholder.com/100x100">
                    </div>
                    <div class="col-7">
                        <span class="roster__name">{{students.name}}</span>
                        <div>{{students.major}}</div>
                    </div>
                    <div class="justify-content-right col-auto">
                        <i class="fas fa-times py-auto"></i>
                    </div>
                </div>
            </span>
        </div>
    </div>
</template>


<script>
export default {
	components: {},
    props: ['students'] 
};
</script>
