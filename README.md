# Stepler
Stepler for Codeception is a small extension which enables console step-by-step execution of tests in debugging mode.


## Installation and Usage
In order to use this extenstion you need to add a new dependency to your **composer.json** file:
```
{
    "require": {
	    "nicholascus/codeception-stepler": "~0.0.3"
    }
}
```
For step-by-step execution use one of following options:
* enable Stepler as extenstion and have it applied to all run commands;
* enable Stepler as custom command and use it instead of run when you need.
With both options you can run all tests in your project, but that probably would make more sense to limit execution to one test case using run/stepler command with arguments of suite name, test class and individual test, e.g. ```vendor/bin/codecept run --debug functional MyTestCest:test1```

### Configuration and command line commands:
1. In Codeception tests simply put it in "enabled" extensions section of **codeception.yml**:
```yaml
extensions:
    enabled:
        - Nicholascus\Codeception\Extensions\Stepler
```
Once extension is enabled, it will stop test execution in console after each step and wait for Enter to be pressed:
```bash
vendor/bin/codecept run --debug
```

2. In Codeception tests simply put it in "commands" extensions section of **codeception.yml**:
```yaml
extensions:
    commands:	
        - Nicholascus\Codeception\Commands\Stepler
```
Once command is enabled, it will duplicate run command accepting all the same parameters but also enabling Stepler step-by-step debug execution:
```bash
vendor/bin/codecept stepler --debug
```
