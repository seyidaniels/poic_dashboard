<template>
  <!-- CONTENT
  ==================================================-->
  <div class="container-fluid">
    <div class="row align-items-center justify-content-center">
      <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5 mt-4">
        <!-- Heading -->
        <h1 class="display-4 text-center mb-3 mt-4">
          <img
            src="landing/assets/img/logo-white.png"
            class="img-fluid img-white"
            style="width: 50%;"
            alt
          >
        </h1>

        <div v-show="showSignUp">
          <transition name="component-fade" mode="out-in">
            <div>
              <!-- Subheading -->
              <p class="text-center mb-5">Create an account</p>

              <!-- Form -->
              <form @submit.prevent="clickRegister">
                <!-- Email address -->
                <div class="form-group">
                  <!-- Label -->
                  <label>Email Address</label>

                  <!-- Input -->
                  <input
                    type="email"
                    class="form-control"
                    v-model="userSignUp.email"
                    placeholder="name@address.com"
                  >
                </div>

                <!-- Email address -->
                <div class="form-group row">
                  <div class="col-md-6">
                    <!-- Label -->
                    <label>Firstname</label>

                    <!-- Input -->
                    <input
                      type="text"
                      class="form-control"
                      v-model="userSignUp.firstname"
                      placeholder="firstname"
                    >
                  </div>

                  <div class="col-md-6">
                    <!-- Label -->
                    <label>Lastname</label>

                    <!-- Input -->
                    <input
                      type="text"
                      class="form-control"
                      v-model="userSignUp.lastname"
                      placeholder="lastname"
                    >
                  </div>
                </div>

                 <!-- <div class="form-group"> -->
                  <!-- Label -->
                  <!-- <label> Institution</label>



                  <select class="form-control" id="">

                  </select>
                </div> -->

                <!-- Phone Number -->
                <div class="form-group">
                  <!-- Label -->
                  <label>Phone Number</label>

                  <!-- Input -->
                  <input
                    type="number"
                    class="form-control"
                    v-model="userSignUp.phone"
                    placeholder="08012345678"
                  >
                </div>

                <!-- Password -->
                <div class="form-group">
                  <!-- Label -->
                  <label>Password</label>

                  <!-- Input group -->
                  <div class="input-group input-group-merge">
                    <!-- Input -->
                    <input
                      type="password"
                      v-model="userSignUp.password"
                      class="form-control form-control-appended"
                      placeholder="Enter your password"
                    >

                    <!-- Icon -->
                    <div class="input-group-append">
                      <span class="input-group-text" @click="togglePass($event)">
                        <i class="fe fe-eye"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                  <!-- Label -->
                  <label>Confirm Password</label>

                  <!-- Input group -->
                  <div class="input-group input-group-merge">
                    <!-- Input -->
                    <input
                      type="password"
                      v-model="userSignUp.password_confirmation"
                      class="form-control form-control-appended"
                      placeholder="Enter your password"
                    >

                    <!-- Icon -->
                    <div class="input-group-append">
                      <span class="input-group-text" @click="togglePass($event)">
                        <i class="fe fe-eye"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <small class="text-primary">
                    By Signing Up, You agree to
                    <span>
                      <a
                        class="text-info"
                        target="_blank"
                        href="terms-conditions"
                      >POIC terms and conditions</a>
                    </span>
                  </small>
                </div>

                <!-- Submit -->
                <button
                  class="btn btn-lg btn-block btn-primary mb-3"
                  :disabled="loading"
                  type="submit"
                >
                  <i v-if="loading" class="fa fa-circle-o-notch fa-spin"></i>
                  <span v-if="!loading">Sign Up</span>
                </button>

                <!-- Link -->
                <div class="text-center">
                  <small class="text-muted text-center">
                    Already have an account?
                    <a
                      href="#"
                      @click="showSignIn = true; showSignUp = false; showForgot = false; showResendEmail = false;"
                    >Log in</a>.
                  </small>
                </div>
              </form>
            </div>
          </transition>
        </div>

        <div v-show="showSignIn">
          <transition name="component-fade" mode="out-in">
            <div>
              <!-- Subheading -->
              <p class="text-center mb-5">Log in to your account</p>

              <!-- Form -->
              <form @submit.prevent="clickLogin">
                <!-- Email address -->
                <div class="form-group">
                  <!-- Label -->
                  <label>Email Address</label>

                  <!-- Input -->
                  <input
                    type="email"
                    v-model="userSignIn.email"
                    class="form-control"
                    placeholder="name@address.com"
                  >
                </div>

                <!-- Password -->
                <div class="form-group">
                  <!-- Label -->
                  <label>Password</label>

                  <!-- Input -->
                  <input
                    type="password"
                    v-model="userSignIn.password"
                    class="form-control"
                    placeholder="password"
                  >
                </div>

                <!-- Submit -->
                <button
                  class="btn btn-lg btn-block btn-primary mb-3"
                  :disabled="loading"
                  type="submit"
                >
                  <i v-if="loading" class="fa fa-circle-o-notch fa-spin"></i>
                  <span v-if="!loading">Sign In</span>
                </button>

                <!-- Link -->
                <div class="text-center">
                  <small class="text-muted text-center">
                    Dont have an account?
                    <a
                      href="#"
                      @click="showSignUp = true; showForgot = false; showSignIn = false; showResendEmail = false;"
                    >Sign Up</a>.
                  </small>
                  <small class="text-muted text-center">
                    Forgot Password?
                    <a
                      href="#"
                      @click="showForgot = true; showSignUp = false; showSignIn = false; showResendEmail = false;"
                    >Forgot</a>.
                  </small>
                  <small v-if="promptResend" class="text-muted text-center">
                    Did not get any email,
                    <a
                      href="#"
                      @click="showResendEmail = true; showForgot = false; showSignIn = false; showSignUp = false; "
                    >Resend</a>
                  </small>
                </div>
              </form>
            </div>
          </transition>
        </div>
        <div v-show="showForgot">
          <transition name="component-fade" mode="out-in">
            <div>
              <!-- Subheading -->
              <p class="text-center mb-5">Recover Password</p>
              <form @submit.prevent="recoverPassword">
                <!-- Email address -->
                <div class="form-group">
                  <!-- Label -->
                  <label>Email Address</label>

                  <!-- Input -->
                  <input
                    type="email"
                    v-model="recover_email"
                    class="form-control"
                    placeholder="name@address.com"
                  >
                </div>

                <!-- Submit -->
                <button class="btn btn-lg btn-block btn-primary mb-3">
                  <i v-if="loading" class="fa fa-circle-o-notch fa-spin"></i>
                  <span v-if="!loading">Recover Password</span>
                </button>

                <!-- Link -->
                <div class="text-center">
                  <small class="text-muted text-center">
                    Back to Login?
                    <a
                      href="#"
                      @click="showSignUp = false; showForgot = false; showSignIn = true; showResendEmail = false"
                    >Sign In</a>.
                  </small>
                </div>
              </form>
            </div>
          </transition>
        </div>

        <div v-show="showResendEmail">
          <transition name="component-fade" mode="out-in">
            <div>
              <!-- Subheading -->
              <p class="text-center mb-5">Resend Email</p>
              <form @submit.prevent="resendEmail">
                <!-- Email address -->
                <div class="form-group">
                  <!-- Label -->
                  <label>Email Address</label>

                  <!-- Input -->
                  <input
                    type="email"
                    v-model="resend_email"
                    class="form-control"
                    placeholder="name@address.com"
                  >
                </div>

                <!-- Submit -->
                <button
                  class="btn btn-lg btn-block btn-primary mb-3"
                  :disabled="loading"
                  type="submit"
                >
                  <i v-if="loading" class="fa fa-circle-o-notch fa-spin"></i>
                  <span v-if="!loading">Resend Verification Email</span>
                </button>

                <!-- Link -->
                <div class="text-center">
                  <small class="text-muted text-center">
                    Back to Login?
                    <a
                      href="#"
                      @click="showSignUp = false; showForgot = false; showSignIn = true; showResendEmail = false;"
                    >Sign In</a>.
                  </small>
                </div>
              </form>
            </div>
          </transition>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import handleError from '../error';

export default {
	data: function() {
		return {
			showSignUp: false,
			showForgot: false,
			showSignIn: true,
			loading: false,
			promptResend: false,
			showResendEmail: false,
			url: '',
			resend_email: '',
			recover_email: '',
			userSignUp: {
				email: '',
				firstname: '',
				lastname: '',
				phone: '',
				password: '',
				password_confirmation: ''
			},
			userSignIn: {
				email: '',
				password: ''
			}
		};
	},
	methods: {
		togglePass(event) {
			if (this.userSignUp.password.length > 0) {
				let password = event.target.parentNode.parentNode.parentNode.firstChild;
				if (password.type === 'password') {
					password.type = 'text';
					event.target.className = 'fe fe-eye-off';
				} else {
					password.type = 'password';
					event.target.className = 'fe fe-eye';
				}
			}
		},
		validateRegister() {
			if (this.userSignUp.firstname.length < 3 || this.userSignUp.lastname.length < 3)
				return toastr.warning('Firstname or Lastname fields cant be empty');
			if (this.userSignUp.phone.length < 11) return toastr.warning('Invalid Phone Number');
			if (this.userSignUp.password.length < 5) return toastr.warning('Please use a stronger password');
			if (this.userSignUp.password !== this.userSignUp.password_confirmation)
				return toastr.warning('Passwords do not match');
			return true;
		},
		validateEmail(email) {
			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(String(email).toLowerCase());
		},
		clickRegister() {
			if (this.validateRegister() === true) {
				this.toggleLoading();
				axios
					.post('/api/register', this.userSignUp)
					.then(response => {
						this.handleResponse(response);
					})
					.catch(error => {
						this.handleError(error);
					});
			}
		},
		toggleLoading() {
			this.loading = !this.loading;
		},
		handleResponse(data) {
			if (data.data.success) {
				toastr.success(data.data.message);
				this.userSignUp = '';
				this.userSignIn = '';
				let token = data.data.data.token;
				let user = data.data.data.user;
				this.saveUserData(token, user);
				window.location.reload();
			} else {
				toastr.warning(data.data.error);
			}
			if (data.data.not_verified) this.promptResend = true;
			this.toggleLoading();
		},
		handleError(error) {
			if (error.response) {
				if (error.response.status === 422) {
					Object.values(error.response.data.error).forEach(function(element) {
						toastr.error(element);
					});
				} else if (error.response.status === 404) {
					toastr.error('Could not find the requested resource');
				} else {
					toastr.error(
						'Oops! Something went wrong, we could not send a verification mail to you, please try again!'
					);
				}
			}
			this.toggleLoading();
		},
		saveUserData(token, user) {
			localStorage.setItem('user', JSON.stringify(user));
			localStorage.setItem('token', token);
			this.$store.dispatch('SET_TOKEN', token);
			this.$store.dispatch('SET_USER', user);
		},
		validateLogin() {
			if (this.userSignIn.password.length < 5) return toastr.warning('Password too short');
			return true;
		},

		clickLogin() {
			this.toggleLoading();
			axios
				.post('/api/login', this.userSignIn)
				.then(response => {
					if (response.data.success) {
						let token = response.data.data.token;
						let user = response.data.data.user;
						this.saveUserData(token, user);
						location.reload();
					} else {
						toastr.error(response.data.error);
						if (response.data.not_verified) this.promptResend = true;
						this.toggleLoading();
					}
				})
				.catch(error => {
					this.handleError(error);
				});
		},
		resendEmail() {
			if (this.resend_email == '') return toastr.error('Invalid Email');
			this.toggleLoading();
			axios
				.post('/api/resend-verification', { email: this.resend_email })
				.then(response => {
					if (response.data.success) {
						toastr.success(response.data.message);
					}
					this.toggleLoading();
				})
				.catch(error => {
					handleError(error);
				});
		},
		recoverPassword() {
			if (this.recover_email == '') return toastr.error('Invalid Email');
			this.toggleLoading();
			axios
				.post('/api/recover', { email: this.recover_email })
				.then(response => {
					if (response.data.success) {
						toastr.success(response.data.message);
					}
					this.toggleLoading();
				})
				.catch(error => {
					handleError(error);
				});
		}
	},
	mounted() {
		this.url = this.$store.state.serverURI;
	}
};
</script>1




<style>
.component-fade-enter-active,
.component-fade-leave-active {
	transition: opacity 0.3s ease;
}
.component-fade-enter, .component-fade-leave-to
/* .component-fade-leave-active below version 2.1.8 */ {
	opacity: 0;
}
</style>


