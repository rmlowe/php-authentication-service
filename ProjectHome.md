This project provides a sample authentication service for use with [NetDimensions Talent Suite](http://www.netdimensions.com/talent-suite/), implemented in PHP. Note that this code is intended primarily to demonstrate the delegated authentication protocol. It does **not** validate user credentials against a real directory service or database.

You may adapt this code to create your own authentication service for Talent Suite.

# Deployment #

You will need to modify the values of two variables in `config.php` as follows:

  * `$ekp_base` will need to point to the base URL of your Talent Suite installation; and
  * `$key` will need to contain the secret key value used to compute the MD5 cryptographic hash for the response.

# Configuration #

To configure the sample authentication service, set the properties listed below in `WEB-INF/conf/ekp.properties`.
  * `authentication.key` should be set to the same value as the `$key` variable mentioned above.
  * `authentication.service.url` should be set to point to the absolute URL of `sso.php`.