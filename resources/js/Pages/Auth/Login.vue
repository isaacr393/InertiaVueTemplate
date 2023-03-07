<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeCheckbox from '@/Components/Checkbox.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <!-- <BreezeGuestLayout> -->
        <Head title="Log in" />

        <BreezeValidationErrors class="mb-4" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div style="width:100%;min-height: 100vh; display:flex;">
            <div style="width:80%;background-color:red;
            background-image:url('../assets/login-register.jpg');
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover;"></div>
            <form @submit.prevent="submit"
                style="width:30%;background-color:white; padding: 10px;"
                class="login-box card"
            >
                <div>
                    <!-- <BreezeLabel for="email" value="Email" />
                    <BreezeInput id="email" type="email" class="mt-1 block w-full inputs" v-model="form.email" required autofocus autocomplete="username" /> -->
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control inputs" type="email" required="true" v-model="form.email" autofocus placeholder="Username" autocomplete="username">
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <!-- <BreezeLabel for="password" value="Password" />
                    <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" /> -->
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control inputs" type="password" required v-model="form.password" placeholder="Password" autocomplete="current-password">
                        </div>
                    </div>
                </div>

                <div class="block mt-4">
                    <label class="flex items-center">
                        <BreezeCheckbox name="remember" v-model:checked="form.remember" />
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <!-- <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                        Forgot your password?
                    </Link> -->

                    <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing,
                        'btn':true, 'btn-info':true, 'btn-lg':true, 'btn-block':true, 'text-uppercase':true,
                        'waves-effect':true, 'waves-light':true }" 
                        :disabled="form.processing">
                        Log in
                    </BreezeButton>
                </div>
            </form>
        </div>        
    <!-- </BreezeGuestLayout> -->
</template>

<style scoped>
    .inputs{
        border: none !important;
        border-bottom: 2px solid blue !important;
        background: white;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
    }
</style>