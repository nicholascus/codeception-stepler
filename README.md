# Stepler
Stepler for Codeception is a small extension which enables console step-by-step execution of tests in debugging mode.


## Installation and Usage
In order to use this extenstion you need to add a new dependency to your **composer.json** file:
```
{
    "require": {
	    "nicholascus/codeception-stepler": "~0.0.2"
    }
}
```
To enable this adapter in Codeception tests simply put it in "enabled" extensions section of **codeception.yml**:
```yaml
extensions:
    enabled:
        - Nicholascus\Codeception\Extensions\Stepler
```

Once extension is enabled, it will stop test execution in console before each step and wait for Enter to be pressed:
```bash
vendor/bin/codecept run --debug
```
