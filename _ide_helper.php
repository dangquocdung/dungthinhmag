<?php
/**
 * A helper file for Laravel 5, to provide autocomplete information to your IDE
 * Generated for Laravel 5.5.32 on 2018-01-24.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */
namespace  {
    exit("This file should not be included, only analyzed by your IDE");
}

namespace Illuminate\Support\Facades { 

    class App {
        
        /**
         * Get the version number of the application.
         *
         * @return string 
         * @static 
         */ 
        public static function version()
        {
            return \Illuminate\Foundation\Application::version();
        }
        
        /**
         * Run the given array of bootstrap classes.
         *
         * @param array $bootstrappers
         * @return void 
         * @static 
         */ 
        public static function bootstrapWith($bootstrappers)
        {
            \Illuminate\Foundation\Application::bootstrapWith($bootstrappers);
        }
        
        /**
         * Register a callback to run after loading the environment.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function afterLoadingEnvironment($callback)
        {
            \Illuminate\Foundation\Application::afterLoadingEnvironment($callback);
        }
        
        /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function beforeBootstrapping($bootstrapper, $callback)
        {
            \Illuminate\Foundation\Application::beforeBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function afterBootstrapping($bootstrapper, $callback)
        {
            \Illuminate\Foundation\Application::afterBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasBeenBootstrapped()
        {
            return \Illuminate\Foundation\Application::hasBeenBootstrapped();
        }
        
        /**
         * Set the base path for the application.
         *
         * @param string $basePath
         * @return $this 
         * @static 
         */ 
        public static function setBasePath($basePath)
        {
            return \Illuminate\Foundation\Application::setBasePath($basePath);
        }
        
        /**
         * Get the path to the application "app" directory.
         *
         * @param string $path Optionally, a path to append to the app path
         * @return string 
         * @static 
         */ 
        public static function path($path = '')
        {
            return \Illuminate\Foundation\Application::path($path);
        }
        
        /**
         * Get the base path of the Laravel installation.
         *
         * @param string $path Optionally, a path to append to the base path
         * @return string 
         * @static 
         */ 
        public static function basePath($path = '')
        {
            return \Illuminate\Foundation\Application::basePath($path);
        }
        
        /**
         * Get the path to the bootstrap directory.
         *
         * @param string $path Optionally, a path to append to the bootstrap path
         * @return string 
         * @static 
         */ 
        public static function bootstrapPath($path = '')
        {
            return \Illuminate\Foundation\Application::bootstrapPath($path);
        }
        
        /**
         * Get the path to the application configuration files.
         *
         * @param string $path Optionally, a path to append to the config path
         * @return string 
         * @static 
         */ 
        public static function configPath($path = '')
        {
            return \Illuminate\Foundation\Application::configPath($path);
        }
        
        /**
         * Get the path to the database directory.
         *
         * @param string $path Optionally, a path to append to the database path
         * @return string 
         * @static 
         */ 
        public static function databasePath($path = '')
        {
            return \Illuminate\Foundation\Application::databasePath($path);
        }
        
        /**
         * Set the database directory.
         *
         * @param string $path
         * @return $this 
         * @static 
         */ 
        public static function useDatabasePath($path)
        {
            return \Illuminate\Foundation\Application::useDatabasePath($path);
        }
        
        /**
         * Get the path to the language files.
         *
         * @return string 
         * @static 
         */ 
        public static function langPath()
        {
            return \Illuminate\Foundation\Application::langPath();
        }
        
        /**
         * Get the path to the public / web directory.
         *
         * @return string 
         * @static 
         */ 
        public static function publicPath()
        {
            return \Illuminate\Foundation\Application::publicPath();
        }
        
        /**
         * Get the path to the storage directory.
         *
         * @return string 
         * @static 
         */ 
        public static function storagePath()
        {
            return \Illuminate\Foundation\Application::storagePath();
        }
        
        /**
         * Set the storage directory.
         *
         * @param string $path
         * @return $this 
         * @static 
         */ 
        public static function useStoragePath($path)
        {
            return \Illuminate\Foundation\Application::useStoragePath($path);
        }
        
        /**
         * Get the path to the resources directory.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function resourcePath($path = '')
        {
            return \Illuminate\Foundation\Application::resourcePath($path);
        }
        
        /**
         * Get the path to the environment file directory.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentPath()
        {
            return \Illuminate\Foundation\Application::environmentPath();
        }
        
        /**
         * Set the directory for the environment file.
         *
         * @param string $path
         * @return $this 
         * @static 
         */ 
        public static function useEnvironmentPath($path)
        {
            return \Illuminate\Foundation\Application::useEnvironmentPath($path);
        }
        
        /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param string $file
         * @return $this 
         * @static 
         */ 
        public static function loadEnvironmentFrom($file)
        {
            return \Illuminate\Foundation\Application::loadEnvironmentFrom($file);
        }
        
        /**
         * Get the environment file the application is using.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentFile()
        {
            return \Illuminate\Foundation\Application::environmentFile();
        }
        
        /**
         * Get the fully qualified path to the environment file.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentFilePath()
        {
            return \Illuminate\Foundation\Application::environmentFilePath();
        }
        
        /**
         * Get or check the current application environment.
         *
         * @return string|bool 
         * @static 
         */ 
        public static function environment()
        {
            return \Illuminate\Foundation\Application::environment();
        }
        
        /**
         * Determine if application is in local environment.
         *
         * @return bool 
         * @static 
         */ 
        public static function isLocal()
        {
            return \Illuminate\Foundation\Application::isLocal();
        }
        
        /**
         * Detect the application's current environment.
         *
         * @param \Closure $callback
         * @return string 
         * @static 
         */ 
        public static function detectEnvironment($callback)
        {
            return \Illuminate\Foundation\Application::detectEnvironment($callback);
        }
        
        /**
         * Determine if we are running in the console.
         *
         * @return bool 
         * @static 
         */ 
        public static function runningInConsole()
        {
            return \Illuminate\Foundation\Application::runningInConsole();
        }
        
        /**
         * Determine if we are running unit tests.
         *
         * @return bool 
         * @static 
         */ 
        public static function runningUnitTests()
        {
            return \Illuminate\Foundation\Application::runningUnitTests();
        }
        
        /**
         * Register all of the configured providers.
         *
         * @return void 
         * @static 
         */ 
        public static function registerConfiguredProviders()
        {
            \Illuminate\Foundation\Application::registerConfiguredProviders();
        }
        
        /**
         * Register a service provider with the application.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @param array $options
         * @param bool $force
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */ 
        public static function register($provider, $options = array(), $force = false)
        {
            return \Illuminate\Foundation\Application::register($provider, $options, $force);
        }
        
        /**
         * Get the registered service provider instance if it exists.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return \Illuminate\Support\ServiceProvider|null 
         * @static 
         */ 
        public static function getProvider($provider)
        {
            return \Illuminate\Foundation\Application::getProvider($provider);
        }
        
        /**
         * Get the registered service provider instances if any exist.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return array 
         * @static 
         */ 
        public static function getProviders($provider)
        {
            return \Illuminate\Foundation\Application::getProviders($provider);
        }
        
        /**
         * Resolve a service provider instance from the class name.
         *
         * @param string $provider
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */ 
        public static function resolveProvider($provider)
        {
            return \Illuminate\Foundation\Application::resolveProvider($provider);
        }
        
        /**
         * Load and boot all of the remaining deferred providers.
         *
         * @return void 
         * @static 
         */ 
        public static function loadDeferredProviders()
        {
            \Illuminate\Foundation\Application::loadDeferredProviders();
        }
        
        /**
         * Load the provider for a deferred service.
         *
         * @param string $service
         * @return void 
         * @static 
         */ 
        public static function loadDeferredProvider($service)
        {
            \Illuminate\Foundation\Application::loadDeferredProvider($service);
        }
        
        /**
         * Register a deferred provider and service.
         *
         * @param string $provider
         * @param string|null $service
         * @return void 
         * @static 
         */ 
        public static function registerDeferredProvider($provider, $service = null)
        {
            \Illuminate\Foundation\Application::registerDeferredProvider($provider, $service);
        }
        
        /**
         * Resolve the given type from the container.
         * 
         * (Overriding Container::make)
         *
         * @param string $abstract
         * @param array $parameters
         * @return mixed 
         * @static 
         */ 
        public static function make($abstract, $parameters = array())
        {
            return \Illuminate\Foundation\Application::make($abstract, $parameters);
        }
        
        /**
         * Determine if the given abstract type has been bound.
         * 
         * (Overriding Container::bound)
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function bound($abstract)
        {
            return \Illuminate\Foundation\Application::bound($abstract);
        }
        
        /**
         * Determine if the application has booted.
         *
         * @return bool 
         * @static 
         */ 
        public static function isBooted()
        {
            return \Illuminate\Foundation\Application::isBooted();
        }
        
        /**
         * Boot the application's service providers.
         *
         * @return void 
         * @static 
         */ 
        public static function boot()
        {
            \Illuminate\Foundation\Application::boot();
        }
        
        /**
         * Register a new boot listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function booting($callback)
        {
            \Illuminate\Foundation\Application::booting($callback);
        }
        
        /**
         * Register a new "booted" listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function booted($callback)
        {
            \Illuminate\Foundation\Application::booted($callback);
        }
        
        /**
         * {@inheritdoc}
         *
         * @static 
         */ 
        public static function handle($request, $type = 1, $catch = true)
        {
            return \Illuminate\Foundation\Application::handle($request, $type, $catch);
        }
        
        /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool 
         * @static 
         */ 
        public static function shouldSkipMiddleware()
        {
            return \Illuminate\Foundation\Application::shouldSkipMiddleware();
        }
        
        /**
         * Get the path to the cached services.php file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedServicesPath()
        {
            return \Illuminate\Foundation\Application::getCachedServicesPath();
        }
        
        /**
         * Get the path to the cached packages.php file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedPackagesPath()
        {
            return \Illuminate\Foundation\Application::getCachedPackagesPath();
        }
        
        /**
         * Determine if the application configuration is cached.
         *
         * @return bool 
         * @static 
         */ 
        public static function configurationIsCached()
        {
            return \Illuminate\Foundation\Application::configurationIsCached();
        }
        
        /**
         * Get the path to the configuration cache file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedConfigPath()
        {
            return \Illuminate\Foundation\Application::getCachedConfigPath();
        }
        
        /**
         * Determine if the application routes are cached.
         *
         * @return bool 
         * @static 
         */ 
        public static function routesAreCached()
        {
            return \Illuminate\Foundation\Application::routesAreCached();
        }
        
        /**
         * Get the path to the routes cache file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedRoutesPath()
        {
            return \Illuminate\Foundation\Application::getCachedRoutesPath();
        }
        
        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool 
         * @static 
         */ 
        public static function isDownForMaintenance()
        {
            return \Illuminate\Foundation\Application::isDownForMaintenance();
        }
        
        /**
         * Throw an HttpException with the given data.
         *
         * @param int $code
         * @param string $message
         * @param array $headers
         * @return void 
         * @throws \Symfony\Component\HttpKernel\Exception\HttpException
         * @static 
         */ 
        public static function abort($code, $message = '', $headers = array())
        {
            \Illuminate\Foundation\Application::abort($code, $message, $headers);
        }
        
        /**
         * Register a terminating callback with the application.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function terminating($callback)
        {
            return \Illuminate\Foundation\Application::terminating($callback);
        }
        
        /**
         * Terminate the application.
         *
         * @return void 
         * @static 
         */ 
        public static function terminate()
        {
            \Illuminate\Foundation\Application::terminate();
        }
        
        /**
         * Get the service providers that have been loaded.
         *
         * @return array 
         * @static 
         */ 
        public static function getLoadedProviders()
        {
            return \Illuminate\Foundation\Application::getLoadedProviders();
        }
        
        /**
         * Get the application's deferred services.
         *
         * @return array 
         * @static 
         */ 
        public static function getDeferredServices()
        {
            return \Illuminate\Foundation\Application::getDeferredServices();
        }
        
        /**
         * Set the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */ 
        public static function setDeferredServices($services)
        {
            \Illuminate\Foundation\Application::setDeferredServices($services);
        }
        
        /**
         * Add an array of services to the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */ 
        public static function addDeferredServices($services)
        {
            \Illuminate\Foundation\Application::addDeferredServices($services);
        }
        
        /**
         * Determine if the given service is a deferred service.
         *
         * @param string $service
         * @return bool 
         * @static 
         */ 
        public static function isDeferredService($service)
        {
            return \Illuminate\Foundation\Application::isDeferredService($service);
        }
        
        /**
         * Configure the real-time facade namespace.
         *
         * @param string $namespace
         * @return void 
         * @static 
         */ 
        public static function provideFacades($namespace)
        {
            \Illuminate\Foundation\Application::provideFacades($namespace);
        }
        
        /**
         * Define a callback to be used to configure Monolog.
         *
         * @param callable $callback
         * @return $this 
         * @static 
         */ 
        public static function configureMonologUsing($callback)
        {
            return \Illuminate\Foundation\Application::configureMonologUsing($callback);
        }
        
        /**
         * Determine if the application has a custom Monolog configurator.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasMonologConfigurator()
        {
            return \Illuminate\Foundation\Application::hasMonologConfigurator();
        }
        
        /**
         * Get the custom Monolog configurator for the application.
         *
         * @return callable 
         * @static 
         */ 
        public static function getMonologConfigurator()
        {
            return \Illuminate\Foundation\Application::getMonologConfigurator();
        }
        
        /**
         * Get the current application locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {
            return \Illuminate\Foundation\Application::getLocale();
        }
        
        /**
         * Set the current application locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function setLocale($locale)
        {
            \Illuminate\Foundation\Application::setLocale($locale);
        }
        
        /**
         * Determine if application locale is the given locale.
         *
         * @param string $locale
         * @return bool 
         * @static 
         */ 
        public static function isLocale($locale)
        {
            return \Illuminate\Foundation\Application::isLocale($locale);
        }
        
        /**
         * Register the core class aliases in the container.
         *
         * @return void 
         * @static 
         */ 
        public static function registerCoreContainerAliases()
        {
            \Illuminate\Foundation\Application::registerCoreContainerAliases();
        }
        
        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
            \Illuminate\Foundation\Application::flush();
        }
        
        /**
         * Get the application namespace.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function getNamespace()
        {
            return \Illuminate\Foundation\Application::getNamespace();
        }
        
        /**
         * Define a contextual binding.
         *
         * @param string $concrete
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder 
         * @static 
         */ 
        public static function when($concrete)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::when($concrete);
        }
        
        /**
         * Returns true if the container can return an entry for the given identifier.
         * 
         * Returns false otherwise.
         * 
         * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
         * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
         *
         * @param string $id Identifier of the entry to look for.
         * @return bool 
         * @static 
         */ 
        public static function has($id)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::has($id);
        }
        
        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function resolved($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::resolved($abstract);
        }
        
        /**
         * Determine if a given type is shared.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function isShared($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isShared($abstract);
        }
        
        /**
         * Determine if a given string is an alias.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function isAlias($name)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isAlias($name);
        }
        
        /**
         * Register a binding with the container.
         *
         * @param string|array $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */ 
        public static function bind($abstract, $concrete = null, $shared = false)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::bind($abstract, $concrete, $shared);
        }
        
        /**
         * Determine if the container has a method binding.
         *
         * @param string $method
         * @return bool 
         * @static 
         */ 
        public static function hasMethodBinding($method)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::hasMethodBinding($method);
        }
        
        /**
         * Bind a callback to resolve with Container::call.
         *
         * @param string $method
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function bindMethod($method, $callback)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::bindMethod($method, $callback);
        }
        
        /**
         * Get the method binding for the given method.
         *
         * @param string $method
         * @param mixed $instance
         * @return mixed 
         * @static 
         */ 
        public static function callMethodBinding($method, $instance)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::callMethodBinding($method, $instance);
        }
        
        /**
         * Add a contextual binding to the container.
         *
         * @param string $concrete
         * @param string $abstract
         * @param \Closure|string $implementation
         * @return void 
         * @static 
         */ 
        public static function addContextualBinding($concrete, $abstract, $implementation)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::addContextualBinding($concrete, $abstract, $implementation);
        }
        
        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */ 
        public static function bindIf($abstract, $concrete = null, $shared = false)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::bindIf($abstract, $concrete, $shared);
        }
        
        /**
         * Register a shared binding in the container.
         *
         * @param string|array $abstract
         * @param \Closure|string|null $concrete
         * @return void 
         * @static 
         */ 
        public static function singleton($abstract, $concrete = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::singleton($abstract, $concrete);
        }
        
        /**
         * "Extend" an abstract type in the container.
         *
         * @param string $abstract
         * @param \Closure $closure
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function extend($abstract, $closure)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::extend($abstract, $closure);
        }
        
        /**
         * Register an existing instance as shared in the container.
         *
         * @param string $abstract
         * @param mixed $instance
         * @return mixed 
         * @static 
         */ 
        public static function instance($abstract, $instance)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::instance($abstract, $instance);
        }
        
        /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
         * @param array|mixed $tags
         * @return void 
         * @static 
         */ 
        public static function tag($abstracts, $tags)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::tag($abstracts, $tags);
        }
        
        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param string $tag
         * @return array 
         * @static 
         */ 
        public static function tagged($tag)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::tagged($tag);
        }
        
        /**
         * Alias a type to a different name.
         *
         * @param string $abstract
         * @param string $alias
         * @return void 
         * @static 
         */ 
        public static function alias($abstract, $alias)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::alias($abstract, $alias);
        }
        
        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string $abstract
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function rebinding($abstract, $callback)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::rebinding($abstract, $callback);
        }
        
        /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
         * @param mixed $target
         * @param string $method
         * @return mixed 
         * @static 
         */ 
        public static function refresh($abstract, $target, $method)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::refresh($abstract, $target, $method);
        }
        
        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param \Closure $callback
         * @param array $parameters
         * @return \Closure 
         * @static 
         */ 
        public static function wrap($callback, $parameters = array())
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::wrap($callback, $parameters);
        }
        
        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param callable|string $callback
         * @param array $parameters
         * @param string|null $defaultMethod
         * @return mixed 
         * @static 
         */ 
        public static function call($callback, $parameters = array(), $defaultMethod = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::call($callback, $parameters, $defaultMethod);
        }
        
        /**
         * Get a closure to resolve the given type from the container.
         *
         * @param string $abstract
         * @return \Closure 
         * @static 
         */ 
        public static function factory($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::factory($abstract);
        }
        
        /**
         * An alias function name for make().
         *
         * @param string $abstract
         * @param array $parameters
         * @return mixed 
         * @static 
         */ 
        public static function makeWith($abstract, $parameters = array())
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::makeWith($abstract, $parameters);
        }
        
        /**
         * Finds an entry of the container by its identifier and returns it.
         *
         * @param string $id Identifier of the entry to look for.
         * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
         * @throws ContainerExceptionInterface Error while retrieving the entry.
         * @return mixed Entry.
         * @static 
         */ 
        public static function get($id)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::get($id);
        }
        
        /**
         * Instantiate a concrete instance of the given type.
         *
         * @param string $concrete
         * @return mixed 
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static 
         */ 
        public static function build($concrete)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::build($concrete);
        }
        
        /**
         * Register a new resolving callback.
         *
         * @param string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function resolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::resolving($abstract, $callback);
        }
        
        /**
         * Register a new after resolving callback for all types.
         *
         * @param string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function afterResolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::afterResolving($abstract, $callback);
        }
        
        /**
         * Get the container's bindings.
         *
         * @return array 
         * @static 
         */ 
        public static function getBindings()
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getBindings();
        }
        
        /**
         * Get the alias for an abstract if available.
         *
         * @param string $abstract
         * @return string 
         * @throws \LogicException
         * @static 
         */ 
        public static function getAlias($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getAlias($abstract);
        }
        
        /**
         * Remove all of the extender callbacks for a given type.
         *
         * @param string $abstract
         * @return void 
         * @static 
         */ 
        public static function forgetExtenders($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::forgetExtenders($abstract);
        }
        
        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
         * @return void 
         * @static 
         */ 
        public static function forgetInstance($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::forgetInstance($abstract);
        }
        
        /**
         * Clear all of the instances from the container.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetInstances()
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::forgetInstances();
        }
        
        /**
         * Set the globally available instance of the container.
         *
         * @return static 
         * @static 
         */ 
        public static function getInstance()
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getInstance();
        }
        
        /**
         * Set the shared instance of the container.
         *
         * @param \Illuminate\Contracts\Container\Container|null $container
         * @return static 
         * @static 
         */ 
        public static function setInstance($container = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::setInstance($container);
        }
        
        /**
         * Determine if a given offset exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetExists($key);
        }
        
        /**
         * Get the value at a given offset.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetGet($key);
        }
        
        /**
         * Set the value at a given offset.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::offsetSet($key, $value);
        }
        
        /**
         * Unset the value at a given offset.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::offsetUnset($key);
        }
         
    }

    class Artisan {
        
        /**
         * Run the console application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param \Symfony\Component\Console\Output\OutputInterface $output
         * @return int 
         * @static 
         */ 
        public static function handle($input, $output = null)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::handle($input, $output);
        }
        
        /**
         * Terminate the application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param int $status
         * @return void 
         * @static 
         */ 
        public static function terminate($input, $status)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::terminate($input, $status);
        }
        
        /**
         * Register a Closure based command with the application.
         *
         * @param string $signature
         * @param \Closure $callback
         * @return \Illuminate\Foundation\Console\ClosureCommand 
         * @static 
         */ 
        public static function command($signature, $callback)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::command($signature, $callback);
        }
        
        /**
         * Register the given command with the console application.
         *
         * @param \Symfony\Component\Console\Command\Command $command
         * @return void 
         * @static 
         */ 
        public static function registerCommand($command)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::registerCommand($command);
        }
        
        /**
         * Run an Artisan console command by name.
         *
         * @param string $command
         * @param array $parameters
         * @param \Symfony\Component\Console\Output\OutputInterface $outputBuffer
         * @return int 
         * @static 
         */ 
        public static function call($command, $parameters = array(), $outputBuffer = null)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::call($command, $parameters, $outputBuffer);
        }
        
        /**
         * Queue the given console command.
         *
         * @param string $command
         * @param array $parameters
         * @return \Illuminate\Foundation\Bus\PendingDispatch 
         * @static 
         */ 
        public static function queue($command, $parameters = array())
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::queue($command, $parameters);
        }
        
        /**
         * Get all of the commands registered with the console.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::all();
        }
        
        /**
         * Get the output for the last run command.
         *
         * @return string 
         * @static 
         */ 
        public static function output()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::output();
        }
        
        /**
         * Bootstrap the application for artisan commands.
         *
         * @return void 
         * @static 
         */ 
        public static function bootstrap()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::bootstrap();
        }
        
        /**
         * Set the Artisan application instance.
         *
         * @param \Illuminate\Console\Application $artisan
         * @return void 
         * @static 
         */ 
        public static function setArtisan($artisan)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::setArtisan($artisan);
        }
         
    }

    class Auth {
        
        /**
         * Attempt to get the guard from the local cache.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard 
         * @static 
         */ 
        public static function guard($name = null)
        {
            return \Illuminate\Auth\AuthManager::guard($name);
        }
        
        /**
         * Create a session based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */ 
        public static function createSessionDriver($name, $config)
        {
            return \Illuminate\Auth\AuthManager::createSessionDriver($name, $config);
        }
        
        /**
         * Create a token based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\TokenGuard 
         * @static 
         */ 
        public static function createTokenDriver($name, $config)
        {
            return \Illuminate\Auth\AuthManager::createTokenDriver($name, $config);
        }
        
        /**
         * Get the default authentication driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Auth\AuthManager::getDefaultDriver();
        }
        
        /**
         * Set the default guard driver the factory should serve.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function shouldUse($name)
        {
            \Illuminate\Auth\AuthManager::shouldUse($name);
        }
        
        /**
         * Set the default authentication driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Auth\AuthManager::setDefaultDriver($name);
        }
        
        /**
         * Register a new callback based request guard.
         *
         * @param string $driver
         * @param callable $callback
         * @return $this 
         * @static 
         */ 
        public static function viaRequest($driver, $callback)
        {
            return \Illuminate\Auth\AuthManager::viaRequest($driver, $callback);
        }
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function userResolver()
        {
            return \Illuminate\Auth\AuthManager::userResolver();
        }
        
        /**
         * Set the callback to be used to resolve users.
         *
         * @param \Closure $userResolver
         * @return $this 
         * @static 
         */ 
        public static function resolveUsersUsing($userResolver)
        {
            return \Illuminate\Auth\AuthManager::resolveUsersUsing($userResolver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Auth\AuthManager::extend($driver, $callback);
        }
        
        /**
         * Register a custom provider creator Closure.
         *
         * @param string $name
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function provider($name, $callback)
        {
            return \Illuminate\Auth\AuthManager::provider($name, $callback);
        }
        
        /**
         * Create the user provider implementation for the driver.
         *
         * @param string|null $provider
         * @return \Illuminate\Contracts\Auth\UserProvider|null 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function createUserProvider($provider = null)
        {
            return \Illuminate\Auth\AuthManager::createUserProvider($provider);
        }
        
        /**
         * Get the default user provider name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultUserProvider()
        {
            return \Illuminate\Auth\AuthManager::getDefaultUserProvider();
        }
        
        /**
         * Get the currently authenticated user.
         *
         * @return \Botble\ACL\Models\User|null 
         * @static 
         */ 
        public static function user()
        {
            return \Illuminate\Auth\SessionGuard::user();
        }
        
        /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|null 
         * @static 
         */ 
        public static function id()
        {
            return \Illuminate\Auth\SessionGuard::id();
        }
        
        /**
         * Log a user into the application without sessions or cookies.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */ 
        public static function once($credentials = array())
        {
            return \Illuminate\Auth\SessionGuard::once($credentials);
        }
        
        /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @param mixed $id
         * @return \Botble\ACL\Models\User|false 
         * @static 
         */ 
        public static function onceUsingId($id)
        {
            return \Illuminate\Auth\SessionGuard::onceUsingId($id);
        }
        
        /**
         * Validate a user's credentials.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */ 
        public static function validate($credentials = array())
        {
            return \Illuminate\Auth\SessionGuard::validate($credentials);
        }
        
        /**
         * Attempt to authenticate using HTTP Basic Auth.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @static 
         */ 
        public static function basic($field = 'email', $extraConditions = array())
        {
            return \Illuminate\Auth\SessionGuard::basic($field, $extraConditions);
        }
        
        /**
         * Perform a stateless HTTP Basic login attempt.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @static 
         */ 
        public static function onceBasic($field = 'email', $extraConditions = array())
        {
            return \Illuminate\Auth\SessionGuard::onceBasic($field, $extraConditions);
        }
        
        /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param array $credentials
         * @param bool $remember
         * @return bool 
         * @static 
         */ 
        public static function attempt($credentials = array(), $remember = false)
        {
            return \Illuminate\Auth\SessionGuard::attempt($credentials, $remember);
        }
        
        /**
         * Log the given user ID into the application.
         *
         * @param mixed $id
         * @param bool $remember
         * @return \Botble\ACL\Models\User|false 
         * @static 
         */ 
        public static function loginUsingId($id, $remember = false)
        {
            return \Illuminate\Auth\SessionGuard::loginUsingId($id, $remember);
        }
        
        /**
         * Log a user into the application.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @param bool $remember
         * @return void 
         * @static 
         */ 
        public static function login($user, $remember = false)
        {
            \Illuminate\Auth\SessionGuard::login($user, $remember);
        }
        
        /**
         * Log the user out of the application.
         *
         * @return void 
         * @static 
         */ 
        public static function logout()
        {
            \Illuminate\Auth\SessionGuard::logout();
        }
        
        /**
         * Register an authentication attempt event listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function attempting($callback)
        {
            \Illuminate\Auth\SessionGuard::attempting($callback);
        }
        
        /**
         * Get the last user we attempted to authenticate.
         *
         * @return \Botble\ACL\Models\User 
         * @static 
         */ 
        public static function getLastAttempted()
        {
            return \Illuminate\Auth\SessionGuard::getLastAttempted();
        }
        
        /**
         * Get a unique identifier for the auth session value.
         *
         * @return string 
         * @static 
         */ 
        public static function getName()
        {
            return \Illuminate\Auth\SessionGuard::getName();
        }
        
        /**
         * Get the name of the cookie used to store the "recaller".
         *
         * @return string 
         * @static 
         */ 
        public static function getRecallerName()
        {
            return \Illuminate\Auth\SessionGuard::getRecallerName();
        }
        
        /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool 
         * @static 
         */ 
        public static function viaRemember()
        {
            return \Illuminate\Auth\SessionGuard::viaRemember();
        }
        
        /**
         * Get the cookie creator instance used by the guard.
         *
         * @return \Illuminate\Contracts\Cookie\QueueingFactory 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function getCookieJar()
        {
            return \Illuminate\Auth\SessionGuard::getCookieJar();
        }
        
        /**
         * Set the cookie creator instance used by the guard.
         *
         * @param \Illuminate\Contracts\Cookie\QueueingFactory $cookie
         * @return void 
         * @static 
         */ 
        public static function setCookieJar($cookie)
        {
            \Illuminate\Auth\SessionGuard::setCookieJar($cookie);
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getDispatcher()
        {
            return \Illuminate\Auth\SessionGuard::getDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setDispatcher($events)
        {
            \Illuminate\Auth\SessionGuard::setDispatcher($events);
        }
        
        /**
         * Get the session store used by the guard.
         *
         * @return \Illuminate\Contracts\Session\Session 
         * @static 
         */ 
        public static function getSession()
        {
            return \Illuminate\Auth\SessionGuard::getSession();
        }
        
        /**
         * Return the currently cached user.
         *
         * @return \Botble\ACL\Models\User|null 
         * @static 
         */ 
        public static function getUser()
        {
            return \Illuminate\Auth\SessionGuard::getUser();
        }
        
        /**
         * Set the current user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @return $this 
         * @static 
         */ 
        public static function setUser($user)
        {
            return \Illuminate\Auth\SessionGuard::setUser($user);
        }
        
        /**
         * Get the current request instance.
         *
         * @return \Symfony\Component\HttpFoundation\Request 
         * @static 
         */ 
        public static function getRequest()
        {
            return \Illuminate\Auth\SessionGuard::getRequest();
        }
        
        /**
         * Set the current request instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return $this 
         * @static 
         */ 
        public static function setRequest($request)
        {
            return \Illuminate\Auth\SessionGuard::setRequest($request);
        }
        
        /**
         * Determine if the current user is authenticated.
         *
         * @return \Botble\ACL\Models\User 
         * @throws \Illuminate\Auth\AuthenticationException
         * @static 
         */ 
        public static function authenticate()
        {
            return \Illuminate\Auth\SessionGuard::authenticate();
        }
        
        /**
         * Determine if the current user is authenticated.
         *
         * @return bool 
         * @static 
         */ 
        public static function check()
        {
            return \Illuminate\Auth\SessionGuard::check();
        }
        
        /**
         * Determine if the current user is a guest.
         *
         * @return bool 
         * @static 
         */ 
        public static function guest()
        {
            return \Illuminate\Auth\SessionGuard::guest();
        }
        
        /**
         * Get the user provider used by the guard.
         *
         * @return \Illuminate\Contracts\Auth\UserProvider 
         * @static 
         */ 
        public static function getProvider()
        {
            return \Illuminate\Auth\SessionGuard::getProvider();
        }
        
        /**
         * Set the user provider used by the guard.
         *
         * @param \Illuminate\Contracts\Auth\UserProvider $provider
         * @return void 
         * @static 
         */ 
        public static function setProvider($provider)
        {
            \Illuminate\Auth\SessionGuard::setProvider($provider);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Auth\SessionGuard::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Auth\SessionGuard::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Auth\SessionGuard::hasMacro($name);
        }
         
    }

    class Blade {
        
        /**
         * Compile the view at the given path.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function compile($path = null)
        {
            \Illuminate\View\Compilers\BladeCompiler::compile($path);
        }
        
        /**
         * Get the path currently being compiled.
         *
         * @return string 
         * @static 
         */ 
        public static function getPath()
        {
            return \Illuminate\View\Compilers\BladeCompiler::getPath();
        }
        
        /**
         * Set the path currently being compiled.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function setPath($path)
        {
            \Illuminate\View\Compilers\BladeCompiler::setPath($path);
        }
        
        /**
         * Compile the given Blade template contents.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function compileString($value)
        {
            return \Illuminate\View\Compilers\BladeCompiler::compileString($value);
        }
        
        /**
         * Strip the parentheses from the given expression.
         *
         * @param string $expression
         * @return string 
         * @static 
         */ 
        public static function stripParentheses($expression)
        {
            return \Illuminate\View\Compilers\BladeCompiler::stripParentheses($expression);
        }
        
        /**
         * Register a custom Blade compiler.
         *
         * @param callable $compiler
         * @return void 
         * @static 
         */ 
        public static function extend($compiler)
        {
            \Illuminate\View\Compilers\BladeCompiler::extend($compiler);
        }
        
        /**
         * Get the extensions used by the compiler.
         *
         * @return array 
         * @static 
         */ 
        public static function getExtensions()
        {
            return \Illuminate\View\Compilers\BladeCompiler::getExtensions();
        }
        
        /**
         * Register an "if" statement directive.
         *
         * @param string $name
         * @param callable $callback
         * @return void 
         * @static 
         */ 
        public static function if($name, $callback)
        {
            \Illuminate\View\Compilers\BladeCompiler::if($name, $callback);
        }
        
        /**
         * Check the result of a condition.
         *
         * @param string $name
         * @param array $parameters
         * @return bool 
         * @static 
         */ 
        public static function check($name, $parameters = null)
        {
            return \Illuminate\View\Compilers\BladeCompiler::check($name, $parameters);
        }
        
        /**
         * Register a handler for custom directives.
         *
         * @param string $name
         * @param callable $handler
         * @return void 
         * @static 
         */ 
        public static function directive($name, $handler)
        {
            \Illuminate\View\Compilers\BladeCompiler::directive($name, $handler);
        }
        
        /**
         * Get the list of custom directives.
         *
         * @return array 
         * @static 
         */ 
        public static function getCustomDirectives()
        {
            return \Illuminate\View\Compilers\BladeCompiler::getCustomDirectives();
        }
        
        /**
         * Set the echo format to be used by the compiler.
         *
         * @param string $format
         * @return void 
         * @static 
         */ 
        public static function setEchoFormat($format)
        {
            \Illuminate\View\Compilers\BladeCompiler::setEchoFormat($format);
        }
        
        /**
         * Set the echo format to double encode entities.
         *
         * @return void 
         * @static 
         */ 
        public static function doubleEncode()
        {
            \Illuminate\View\Compilers\BladeCompiler::doubleEncode();
        }
        
        /**
         * Get the path to the compiled version of a view.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function getCompiledPath($path)
        {
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::getCompiledPath($path);
        }
        
        /**
         * Determine if the view at the given path is expired.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isExpired($path)
        {
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::isExpired($path);
        }
        
        /**
         * Compile the default values for the echo statement.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function compileEchoDefaults($value)
        {
            return \Illuminate\View\Compilers\BladeCompiler::compileEchoDefaults($value);
        }
         
    }

    class Broadcast {
        
        /**
         * Register the routes for handling broadcast authentication and sockets.
         *
         * @param array|null $attributes
         * @return void 
         * @static 
         */ 
        public static function routes($attributes = null)
        {
            \Illuminate\Broadcasting\BroadcastManager::routes($attributes);
        }
        
        /**
         * Get the socket ID for the given request.
         *
         * @param \Illuminate\Http\Request|null $request
         * @return string|null 
         * @static 
         */ 
        public static function socket($request = null)
        {
            return \Illuminate\Broadcasting\BroadcastManager::socket($request);
        }
        
        /**
         * Begin broadcasting an event.
         *
         * @param mixed|null $event
         * @return \Illuminate\Broadcasting\PendingBroadcast|void 
         * @static 
         */ 
        public static function event($event = null)
        {
            return \Illuminate\Broadcasting\BroadcastManager::event($event);
        }
        
        /**
         * Queue the given event for broadcast.
         *
         * @param mixed $event
         * @return void 
         * @static 
         */ 
        public static function queue($event)
        {
            \Illuminate\Broadcasting\BroadcastManager::queue($event);
        }
        
        /**
         * Get a driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function connection($driver = null)
        {
            return \Illuminate\Broadcasting\BroadcastManager::connection($driver);
        }
        
        /**
         * Get a driver instance.
         *
         * @param string $name
         * @return mixed 
         * @static 
         */ 
        public static function driver($name = null)
        {
            return \Illuminate\Broadcasting\BroadcastManager::driver($name);
        }
        
        /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Broadcasting\BroadcastManager::getDefaultDriver();
        }
        
        /**
         * Set the default driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Broadcasting\BroadcastManager::setDefaultDriver($name);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Broadcasting\BroadcastManager::extend($driver, $callback);
        }
         
    }

    class Bus {
        
        /**
         * Dispatch a command to its appropriate handler.
         *
         * @param mixed $command
         * @return mixed 
         * @static 
         */ 
        public static function dispatch($command)
        {
            return \Illuminate\Bus\Dispatcher::dispatch($command);
        }
        
        /**
         * Dispatch a command to its appropriate handler in the current process.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return mixed 
         * @static 
         */ 
        public static function dispatchNow($command, $handler = null)
        {
            return \Illuminate\Bus\Dispatcher::dispatchNow($command, $handler);
        }
        
        /**
         * Determine if the given command has a handler.
         *
         * @param mixed $command
         * @return bool 
         * @static 
         */ 
        public static function hasCommandHandler($command)
        {
            return \Illuminate\Bus\Dispatcher::hasCommandHandler($command);
        }
        
        /**
         * Retrieve the handler for a command.
         *
         * @param mixed $command
         * @return bool|mixed 
         * @static 
         */ 
        public static function getCommandHandler($command)
        {
            return \Illuminate\Bus\Dispatcher::getCommandHandler($command);
        }
        
        /**
         * Dispatch a command to its appropriate handler behind a queue.
         *
         * @param mixed $command
         * @return mixed 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function dispatchToQueue($command)
        {
            return \Illuminate\Bus\Dispatcher::dispatchToQueue($command);
        }
        
        /**
         * Set the pipes through which commands should be piped before dispatching.
         *
         * @param array $pipes
         * @return $this 
         * @static 
         */ 
        public static function pipeThrough($pipes)
        {
            return \Illuminate\Bus\Dispatcher::pipeThrough($pipes);
        }
        
        /**
         * Map a command to a handler.
         *
         * @param array $map
         * @return $this 
         * @static 
         */ 
        public static function map($map)
        {
            return \Illuminate\Bus\Dispatcher::map($map);
        }
         
    }

    class Cache {
        
        /**
         * Get a cache store instance by name.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Cache\Repository 
         * @static 
         */ 
        public static function store($name = null)
        {
            return \Illuminate\Cache\CacheManager::store($name);
        }
        
        /**
         * Get a cache driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function driver($driver = null)
        {
            return \Illuminate\Cache\CacheManager::driver($driver);
        }
        
        /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @return \Illuminate\Cache\Repository 
         * @static 
         */ 
        public static function repository($store)
        {
            return \Illuminate\Cache\CacheManager::repository($store);
        }
        
        /**
         * Get the default cache driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Cache\CacheManager::getDefaultDriver();
        }
        
        /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Cache\CacheManager::setDefaultDriver($name);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Cache\CacheManager::extend($driver, $callback);
        }
        
        /**
         * Determine if an item exists in the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            return \Illuminate\Cache\Repository::has($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            return \Illuminate\Cache\Repository::get($key, $default);
        }
        
        /**
         * Retrieve multiple items from the cache by key.
         * 
         * Items not found in the cache will have a null value.
         *
         * @param array $keys
         * @return array 
         * @static 
         */ 
        public static function many($keys)
        {
            return \Illuminate\Cache\Repository::many($keys);
        }
        
        /**
         * Obtains multiple cache items by their unique keys.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of keys that can obtained in a single operation.
         * @param mixed $default Default value to return for keys that do not exist.
         * @return \Psr\SimpleCache\iterable A list of key => value pairs. Cache keys that do not exist or are stale will have $default as value.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
        public static function getMultiple($keys, $default = null)
        {
            return \Illuminate\Cache\Repository::getMultiple($keys, $default);
        }
        
        /**
         * Retrieve an item from the cache and delete it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
            return \Illuminate\Cache\Repository::pull($key, $default);
        }
        
        /**
         * Store an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return void 
         * @static 
         */ 
        public static function put($key, $value, $minutes = null)
        {
            \Illuminate\Cache\Repository::put($key, $value, $minutes);
        }
        
        /**
         * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
         *
         * @param string $key The key of the item to store.
         * @param mixed $value The value of the item to store, must be serializable.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                     the driver supports TTL then the library may set a default value
         *                                     for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
        public static function set($key, $value, $ttl = null)
        {
            return \Illuminate\Cache\Repository::set($key, $value, $ttl);
        }
        
        /**
         * Store multiple items in the cache for a given number of minutes.
         *
         * @param array $values
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return void 
         * @static 
         */ 
        public static function putMany($values, $minutes)
        {
            \Illuminate\Cache\Repository::putMany($values, $minutes);
        }
        
        /**
         * Persists a set of key => value pairs in the cache, with an optional TTL.
         *
         * @param \Psr\SimpleCache\iterable $values A list of key => value pairs for a multiple-set operation.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                      the driver supports TTL then the library may set a default value
         *                                      for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $values is neither an array nor a Traversable,
         *   or if any of the $values are not a legal value.
         * @static 
         */ 
        public static function setMultiple($values, $ttl = null)
        {
            return \Illuminate\Cache\Repository::setMultiple($values, $ttl);
        }
        
        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return bool 
         * @static 
         */ 
        public static function add($key, $value, $minutes)
        {
            return \Illuminate\Cache\Repository::add($key, $value, $minutes);
        }
        
        /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
        public static function increment($key, $value = 1)
        {
            return \Illuminate\Cache\Repository::increment($key, $value);
        }
        
        /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
        public static function decrement($key, $value = 1)
        {
            return \Illuminate\Cache\Repository::decrement($key, $value);
        }
        
        /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function forever($key, $value)
        {
            \Illuminate\Cache\Repository::forever($key, $value);
        }
        
        /**
         * Get an item from the cache, or store the default value.
         *
         * @param string $key
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function remember($key, $minutes, $callback)
        {
            return \Illuminate\Cache\Repository::remember($key, $minutes, $callback);
        }
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function sear($key, $callback)
        {
            return \Illuminate\Cache\Repository::sear($key, $callback);
        }
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function rememberForever($key, $callback)
        {
            return \Illuminate\Cache\Repository::rememberForever($key, $callback);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function forget($key)
        {
            return \Illuminate\Cache\Repository::forget($key);
        }
        
        /**
         * Delete an item from the cache by its unique key.
         *
         * @param string $key The unique cache key of the item to delete.
         * @return bool True if the item was successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
        public static function delete($key)
        {
            return \Illuminate\Cache\Repository::delete($key);
        }
        
        /**
         * Deletes multiple cache items in a single operation.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of string-based keys to be deleted.
         * @return bool True if the items were successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
        public static function deleteMultiple($keys)
        {
            return \Illuminate\Cache\Repository::deleteMultiple($keys);
        }
        
        /**
         * Wipes clean the entire cache's keys.
         *
         * @return bool True on success and false on failure.
         * @static 
         */ 
        public static function clear()
        {
            return \Illuminate\Cache\Repository::clear();
        }
        
        /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param array|mixed $names
         * @return \Illuminate\Cache\TaggedCache 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function tags($names)
        {
            return \Illuminate\Cache\Repository::tags($names);
        }
        
        /**
         * Get the default cache time.
         *
         * @return float|int 
         * @static 
         */ 
        public static function getDefaultCacheTime()
        {
            return \Illuminate\Cache\Repository::getDefaultCacheTime();
        }
        
        /**
         * Set the default cache time in minutes.
         *
         * @param float|int $minutes
         * @return $this 
         * @static 
         */ 
        public static function setDefaultCacheTime($minutes)
        {
            return \Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
        }
        
        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store 
         * @static 
         */ 
        public static function getStore()
        {
            return \Illuminate\Cache\Repository::getStore();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {
            \Illuminate\Cache\Repository::setEventDispatcher($events);
        }
        
        /**
         * Determine if a cached value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
            return \Illuminate\Cache\Repository::offsetExists($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
            return \Illuminate\Cache\Repository::offsetGet($key);
        }
        
        /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
            \Illuminate\Cache\Repository::offsetSet($key, $value);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
            \Illuminate\Cache\Repository::offsetUnset($key);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Cache\Repository::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Cache\Repository::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Cache\Repository::hasMacro($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Illuminate\Cache\Repository::macroCall($method, $parameters);
        }
        
        /**
         * Remove all items from the cache.
         *
         * @return bool 
         * @static 
         */ 
        public static function flush()
        {
            return \Illuminate\Cache\FileStore::flush();
        }
        
        /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem 
         * @static 
         */ 
        public static function getFilesystem()
        {
            return \Illuminate\Cache\FileStore::getFilesystem();
        }
        
        /**
         * Get the working directory of the cache.
         *
         * @return string 
         * @static 
         */ 
        public static function getDirectory()
        {
            return \Illuminate\Cache\FileStore::getDirectory();
        }
        
        /**
         * Get the cache key prefix.
         *
         * @return string 
         * @static 
         */ 
        public static function getPrefix()
        {
            return \Illuminate\Cache\FileStore::getPrefix();
        }
         
    }

    class Config {
        
        /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            return \Illuminate\Config\Repository::has($key);
        }
        
        /**
         * Get the specified configuration value.
         *
         * @param array|string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            return \Illuminate\Config\Repository::get($key, $default);
        }
        
        /**
         * Get many configuration values.
         *
         * @param array $keys
         * @return array 
         * @static 
         */ 
        public static function getMany($keys)
        {
            return \Illuminate\Config\Repository::getMany($keys);
        }
        
        /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function set($key, $value = null)
        {
            \Illuminate\Config\Repository::set($key, $value);
        }
        
        /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function prepend($key, $value)
        {
            \Illuminate\Config\Repository::prepend($key, $value);
        }
        
        /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function push($key, $value)
        {
            \Illuminate\Config\Repository::push($key, $value);
        }
        
        /**
         * Get all of the configuration items for the application.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
            return \Illuminate\Config\Repository::all();
        }
        
        /**
         * Determine if the given configuration option exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
            return \Illuminate\Config\Repository::offsetExists($key);
        }
        
        /**
         * Get a configuration option.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
            return \Illuminate\Config\Repository::offsetGet($key);
        }
        
        /**
         * Set a configuration option.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
            \Illuminate\Config\Repository::offsetSet($key, $value);
        }
        
        /**
         * Unset a configuration option.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
            \Illuminate\Config\Repository::offsetUnset($key);
        }
         
    }

    class Cookie {
        
        /**
         * Create a new cookie instance.
         *
         * @param string $name
         * @param string $value
         * @param int $minutes
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true, $raw = false, $sameSite = null)
        {
            return \Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
        
        /**
         * Create a cookie that lasts "forever" (five years).
         *
         * @param string $name
         * @param string $value
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true, $raw = false, $sameSite = null)
        {
            return \Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
        
        /**
         * Expire the given cookie.
         *
         * @param string $name
         * @param string $path
         * @param string $domain
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function forget($name, $path = null, $domain = null)
        {
            return \Illuminate\Cookie\CookieJar::forget($name, $path, $domain);
        }
        
        /**
         * Determine if a cookie has been queued.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasQueued($key)
        {
            return \Illuminate\Cookie\CookieJar::hasQueued($key);
        }
        
        /**
         * Get a queued cookie instance.
         *
         * @param string $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function queued($key, $default = null)
        {
            return \Illuminate\Cookie\CookieJar::queued($key, $default);
        }
        
        /**
         * Queue a cookie to send with the next response.
         *
         * @param array $parameters
         * @return void 
         * @static 
         */ 
        public static function queue($parameters = null)
        {
            \Illuminate\Cookie\CookieJar::queue($parameters);
        }
        
        /**
         * Remove a cookie from the queue.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function unqueue($name)
        {
            \Illuminate\Cookie\CookieJar::unqueue($name);
        }
        
        /**
         * Set the default path and domain for the jar.
         *
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param string $sameSite
         * @return $this 
         * @static 
         */ 
        public static function setDefaultPathAndDomain($path, $domain, $secure = false, $sameSite = null)
        {
            return \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain, $secure, $sameSite);
        }
        
        /**
         * Get the cookies which have been queued for the next request.
         *
         * @return \Symfony\Component\HttpFoundation\Cookie[] 
         * @static 
         */ 
        public static function getQueuedCookies()
        {
            return \Illuminate\Cookie\CookieJar::getQueuedCookies();
        }
         
    }

    class Crypt {
        
        /**
         * Determine if the given key and cipher combination is valid.
         *
         * @param string $key
         * @param string $cipher
         * @return bool 
         * @static 
         */ 
        public static function supported($key, $cipher)
        {
            return \Illuminate\Encryption\Encrypter::supported($key, $cipher);
        }
        
        /**
         * Create a new encryption key for the given cipher.
         *
         * @param string $cipher
         * @return string 
         * @static 
         */ 
        public static function generateKey($cipher)
        {
            return \Illuminate\Encryption\Encrypter::generateKey($cipher);
        }
        
        /**
         * Encrypt the given value.
         *
         * @param mixed $value
         * @param bool $serialize
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         * @static 
         */ 
        public static function encrypt($value, $serialize = true)
        {
            return \Illuminate\Encryption\Encrypter::encrypt($value, $serialize);
        }
        
        /**
         * Encrypt a string without serialization.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function encryptString($value)
        {
            return \Illuminate\Encryption\Encrypter::encryptString($value);
        }
        
        /**
         * Decrypt the given value.
         *
         * @param mixed $payload
         * @param bool $unserialize
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         * @static 
         */ 
        public static function decrypt($payload, $unserialize = true)
        {
            return \Illuminate\Encryption\Encrypter::decrypt($payload, $unserialize);
        }
        
        /**
         * Decrypt the given string without unserialization.
         *
         * @param string $payload
         * @return string 
         * @static 
         */ 
        public static function decryptString($payload)
        {
            return \Illuminate\Encryption\Encrypter::decryptString($payload);
        }
        
        /**
         * Get the encryption key.
         *
         * @return string 
         * @static 
         */ 
        public static function getKey()
        {
            return \Illuminate\Encryption\Encrypter::getKey();
        }
         
    }

    class DB {
        
        /**
         * Get a database connection instance.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function connection($name = null)
        {
            return \Illuminate\Database\DatabaseManager::connection($name);
        }
        
        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function purge($name = null)
        {
            \Illuminate\Database\DatabaseManager::purge($name);
        }
        
        /**
         * Disconnect from the given database.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function disconnect($name = null)
        {
            \Illuminate\Database\DatabaseManager::disconnect($name);
        }
        
        /**
         * Reconnect to the given database.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function reconnect($name = null)
        {
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }
        
        /**
         * Get the default connection name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultConnection()
        {
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }
        
        /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultConnection($name)
        {
            \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }
        
        /**
         * Get all of the support drivers.
         *
         * @return array 
         * @static 
         */ 
        public static function supportedDrivers()
        {
            return \Illuminate\Database\DatabaseManager::supportedDrivers();
        }
        
        /**
         * Get all of the drivers that are actually available.
         *
         * @return array 
         * @static 
         */ 
        public static function availableDrivers()
        {
            return \Illuminate\Database\DatabaseManager::availableDrivers();
        }
        
        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void 
         * @static 
         */ 
        public static function extend($name, $resolver)
        {
            \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }
        
        /**
         * Return all of the created connections.
         *
         * @return array 
         * @static 
         */ 
        public static function getConnections()
        {
            return \Illuminate\Database\DatabaseManager::getConnections();
        }
        
        /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\MySqlBuilder 
         * @static 
         */ 
        public static function getSchemaBuilder()
        {
            return \Illuminate\Database\MySqlConnection::getSchemaBuilder();
        }
        
        /**
         * Bind values to their parameters in the given statement.
         *
         * @param \PDOStatement $statement
         * @param array $bindings
         * @return void 
         * @static 
         */ 
        public static function bindValues($statement, $bindings)
        {
            \Illuminate\Database\MySqlConnection::bindValues($statement, $bindings);
        }
        
        /**
         * Set the query grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultQueryGrammar();
        }
        
        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultSchemaGrammar();
        }
        
        /**
         * Set the query post processor to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultPostProcessor();
        }
        
        /**
         * Begin a fluent query against a database table.
         *
         * @param string $table
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */ 
        public static function table($table)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::table($table);
        }
        
        /**
         * Get a new query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */ 
        public static function query()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::query();
        }
        
        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return mixed 
         * @static 
         */ 
        public static function selectOne($query, $bindings = array(), $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::selectOne($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return array 
         * @static 
         */ 
        public static function selectFromWriteConnection($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::selectFromWriteConnection($query, $bindings);
        }
        
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return array 
         * @static 
         */ 
        public static function select($query, $bindings = array(), $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::select($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run a select statement against the database and returns a generator.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return \Generator 
         * @static 
         */ 
        public static function cursor($query, $bindings = array(), $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::cursor($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function insert($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::insert($query, $bindings);
        }
        
        /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function update($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::update($query, $bindings);
        }
        
        /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function delete($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::delete($query, $bindings);
        }
        
        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function statement($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::statement($query, $bindings);
        }
        
        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function affectingStatement($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::affectingStatement($query, $bindings);
        }
        
        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
         * @return bool 
         * @static 
         */ 
        public static function unprepared($query)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::unprepared($query);
        }
        
        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param \Closure $callback
         * @return array 
         * @static 
         */ 
        public static function pretend($callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::pretend($callback);
        }
        
        /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         * @return array 
         * @static 
         */ 
        public static function prepareBindings($bindings)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::prepareBindings($bindings);
        }
        
        /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         * @return void 
         * @static 
         */ 
        public static function logQuery($query, $bindings, $time = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::logQuery($query, $bindings, $time);
        }
        
        /**
         * Register a database query listener with the connection.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function listen($callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::listen($callback);
        }
        
        /**
         * Get a new raw query expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression 
         * @static 
         */ 
        public static function raw($value)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::raw($value);
        }
        
        /**
         * Indicate if any records have been modified.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function recordsHaveBeenModified($value = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::recordsHaveBeenModified($value);
        }
        
        /**
         * Is Doctrine available?
         *
         * @return bool 
         * @static 
         */ 
        public static function isDoctrineAvailable()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::isDoctrineAvailable();
        }
        
        /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
         * @return \Doctrine\DBAL\Schema\Column 
         * @static 
         */ 
        public static function getDoctrineColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineColumn($table, $column);
        }
        
        /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager 
         * @static 
         */ 
        public static function getDoctrineSchemaManager()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineSchemaManager();
        }
        
        /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection 
         * @static 
         */ 
        public static function getDoctrineConnection()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineConnection();
        }
        
        /**
         * Get the current PDO connection.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getPdo()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getPdo();
        }
        
        /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getReadPdo()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getReadPdo();
        }
        
        /**
         * Set the PDO connection.
         *
         * @param \PDO|\Closure|null $pdo
         * @return $this 
         * @static 
         */ 
        public static function setPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setPdo($pdo);
        }
        
        /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|\Closure|null $pdo
         * @return $this 
         * @static 
         */ 
        public static function setReadPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setReadPdo($pdo);
        }
        
        /**
         * Set the reconnect instance on the connection.
         *
         * @param callable $reconnector
         * @return $this 
         * @static 
         */ 
        public static function setReconnector($reconnector)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setReconnector($reconnector);
        }
        
        /**
         * Get the database connection name.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getName();
        }
        
        /**
         * Get an option from the configuration options.
         *
         * @param string|null $option
         * @return mixed 
         * @static 
         */ 
        public static function getConfig($option = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getConfig($option);
        }
        
        /**
         * Get the PDO driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDriverName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDriverName();
        }
        
        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar 
         * @static 
         */ 
        public static function getQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getQueryGrammar();
        }
        
        /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar $grammar
         * @return void 
         * @static 
         */ 
        public static function setQueryGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setQueryGrammar($grammar);
        }
        
        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar 
         * @static 
         */ 
        public static function getSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getSchemaGrammar();
        }
        
        /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar $grammar
         * @return void 
         * @static 
         */ 
        public static function setSchemaGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setSchemaGrammar($grammar);
        }
        
        /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor 
         * @static 
         */ 
        public static function getPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getPostProcessor();
        }
        
        /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor $processor
         * @return void 
         * @static 
         */ 
        public static function setPostProcessor($processor)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setPostProcessor($processor);
        }
        
        /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getEventDispatcher()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setEventDispatcher($events);
        }
        
        /**
         * Determine if the connection in a "dry run".
         *
         * @return bool 
         * @static 
         */ 
        public static function pretending()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::pretending();
        }
        
        /**
         * Get the connection query log.
         *
         * @return array 
         * @static 
         */ 
        public static function getQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getQueryLog();
        }
        
        /**
         * Clear the query log.
         *
         * @return void 
         * @static 
         */ 
        public static function flushQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::flushQueryLog();
        }
        
        /**
         * Enable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function enableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::enableQueryLog();
        }
        
        /**
         * Disable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function disableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::disableQueryLog();
        }
        
        /**
         * Determine whether we're logging queries.
         *
         * @return bool 
         * @static 
         */ 
        public static function logging()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::logging();
        }
        
        /**
         * Get the name of the connected database.
         *
         * @return string 
         * @static 
         */ 
        public static function getDatabaseName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDatabaseName();
        }
        
        /**
         * Set the name of the connected database.
         *
         * @param string $database
         * @return string 
         * @static 
         */ 
        public static function setDatabaseName($database)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setDatabaseName($database);
        }
        
        /**
         * Get the table prefix for the connection.
         *
         * @return string 
         * @static 
         */ 
        public static function getTablePrefix()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getTablePrefix();
        }
        
        /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         * @return void 
         * @static 
         */ 
        public static function setTablePrefix($prefix)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setTablePrefix($prefix);
        }
        
        /**
         * Set the table prefix and return the grammar.
         *
         * @param \Illuminate\Database\Grammar $grammar
         * @return \Illuminate\Database\Grammar 
         * @static 
         */ 
        public static function withTablePrefix($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::withTablePrefix($grammar);
        }
        
        /**
         * Register a connection resolver.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function resolverFor($driver, $callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::resolverFor($driver, $callback);
        }
        
        /**
         * Get the connection resolver for the given driver.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function getResolver($driver)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getResolver($driver);
        }
        
        /**
         * Execute a Closure within a transaction.
         *
         * @param \Closure $callback
         * @param int $attempts
         * @return mixed 
         * @throws \Exception|\Throwable
         * @static 
         */ 
        public static function transaction($callback, $attempts = 1)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::transaction($callback, $attempts);
        }
        
        /**
         * Start a new database transaction.
         *
         * @return void 
         * @throws \Exception
         * @static 
         */ 
        public static function beginTransaction()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::beginTransaction();
        }
        
        /**
         * Commit the active database transaction.
         *
         * @return void 
         * @static 
         */ 
        public static function commit()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::commit();
        }
        
        /**
         * Rollback the active database transaction.
         *
         * @param int|null $toLevel
         * @return void 
         * @static 
         */ 
        public static function rollBack($toLevel = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::rollBack($toLevel);
        }
        
        /**
         * Get the number of active transactions.
         *
         * @return int 
         * @static 
         */ 
        public static function transactionLevel()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::transactionLevel();
        }
         
    }

    class Event {
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param string|array $events
         * @param mixed $listener
         * @return void 
         * @static 
         */ 
        public static function listen($events, $listener)
        {
            \Illuminate\Events\Dispatcher::listen($events, $listener);
        }
        
        /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
         * @return bool 
         * @static 
         */ 
        public static function hasListeners($eventName)
        {
            return \Illuminate\Events\Dispatcher::hasListeners($eventName);
        }
        
        /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
         * @param array $payload
         * @return void 
         * @static 
         */ 
        public static function push($event, $payload = array())
        {
            \Illuminate\Events\Dispatcher::push($event, $payload);
        }
        
        /**
         * Flush a set of pushed events.
         *
         * @param string $event
         * @return void 
         * @static 
         */ 
        public static function flush($event)
        {
            \Illuminate\Events\Dispatcher::flush($event);
        }
        
        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         * @return void 
         * @static 
         */ 
        public static function subscribe($subscriber)
        {
            \Illuminate\Events\Dispatcher::subscribe($subscriber);
        }
        
        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
         * @param mixed $payload
         * @return array|null 
         * @static 
         */ 
        public static function until($event, $payload = array())
        {
            return \Illuminate\Events\Dispatcher::until($event, $payload);
        }
        
        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */ 
        public static function fire($event, $payload = array(), $halt = false)
        {
            return \Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
        }
        
        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */ 
        public static function dispatch($event, $payload = array(), $halt = false)
        {
            return \Illuminate\Events\Dispatcher::dispatch($event, $payload, $halt);
        }
        
        /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
         * @return array 
         * @static 
         */ 
        public static function getListeners($eventName)
        {
            return \Illuminate\Events\Dispatcher::getListeners($eventName);
        }
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param \Closure|string $listener
         * @param bool $wildcard
         * @return \Closure 
         * @static 
         */ 
        public static function makeListener($listener, $wildcard = false)
        {
            return \Illuminate\Events\Dispatcher::makeListener($listener, $wildcard);
        }
        
        /**
         * Create a class based listener using the IoC container.
         *
         * @param string $listener
         * @param bool $wildcard
         * @return \Closure 
         * @static 
         */ 
        public static function createClassListener($listener, $wildcard = false)
        {
            return \Illuminate\Events\Dispatcher::createClassListener($listener, $wildcard);
        }
        
        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         * @return void 
         * @static 
         */ 
        public static function forget($event)
        {
            \Illuminate\Events\Dispatcher::forget($event);
        }
        
        /**
         * Forget all of the pushed listeners.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetPushed()
        {
            \Illuminate\Events\Dispatcher::forgetPushed();
        }
        
        /**
         * Set the queue resolver implementation.
         *
         * @param callable $resolver
         * @return $this 
         * @static 
         */ 
        public static function setQueueResolver($resolver)
        {
            return \Illuminate\Events\Dispatcher::setQueueResolver($resolver);
        }
         
    }

    class File {
        
        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function exists($path)
        {
            return \Illuminate\Filesystem\Filesystem::exists($path);
        }
        
        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @param bool $lock
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function get($path, $lock = false)
        {
            return \Illuminate\Filesystem\Filesystem::get($path, $lock);
        }
        
        /**
         * Get contents of a file with shared access.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function sharedGet($path)
        {
            return \Illuminate\Filesystem\Filesystem::sharedGet($path);
        }
        
        /**
         * Get the returned value of a file.
         *
         * @param string $path
         * @return mixed 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function getRequire($path)
        {
            return \Illuminate\Filesystem\Filesystem::getRequire($path);
        }
        
        /**
         * Require the given file once.
         *
         * @param string $file
         * @return mixed 
         * @static 
         */ 
        public static function requireOnce($file)
        {
            return \Illuminate\Filesystem\Filesystem::requireOnce($file);
        }
        
        /**
         * Get the MD5 hash of the file at the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function hash($path)
        {
            return \Illuminate\Filesystem\Filesystem::hash($path);
        }
        
        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string $contents
         * @param bool $lock
         * @return int 
         * @static 
         */ 
        public static function put($path, $contents, $lock = false)
        {
            return \Illuminate\Filesystem\Filesystem::put($path, $contents, $lock);
        }
        
        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */ 
        public static function prepend($path, $data)
        {
            return \Illuminate\Filesystem\Filesystem::prepend($path, $data);
        }
        
        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */ 
        public static function append($path, $data)
        {
            return \Illuminate\Filesystem\Filesystem::append($path, $data);
        }
        
        /**
         * Get or set UNIX mode of a file or directory.
         *
         * @param string $path
         * @param int $mode
         * @return mixed 
         * @static 
         */ 
        public static function chmod($path, $mode = null)
        {
            return \Illuminate\Filesystem\Filesystem::chmod($path, $mode);
        }
        
        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool 
         * @static 
         */ 
        public static function delete($paths)
        {
            return \Illuminate\Filesystem\Filesystem::delete($paths);
        }
        
        /**
         * Move a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */ 
        public static function move($path, $target)
        {
            return \Illuminate\Filesystem\Filesystem::move($path, $target);
        }
        
        /**
         * Copy a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */ 
        public static function copy($path, $target)
        {
            return \Illuminate\Filesystem\Filesystem::copy($path, $target);
        }
        
        /**
         * Create a hard link to the target file or directory.
         *
         * @param string $target
         * @param string $link
         * @return void 
         * @static 
         */ 
        public static function link($target, $link)
        {
            \Illuminate\Filesystem\Filesystem::link($target, $link);
        }
        
        /**
         * Extract the file name from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function name($path)
        {
            return \Illuminate\Filesystem\Filesystem::name($path);
        }
        
        /**
         * Extract the trailing name component from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function basename($path)
        {
            return \Illuminate\Filesystem\Filesystem::basename($path);
        }
        
        /**
         * Extract the parent directory from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function dirname($path)
        {
            return \Illuminate\Filesystem\Filesystem::dirname($path);
        }
        
        /**
         * Extract the file extension from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function extension($path)
        {
            return \Illuminate\Filesystem\Filesystem::extension($path);
        }
        
        /**
         * Get the file type of a given file.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function type($path)
        {
            return \Illuminate\Filesystem\Filesystem::type($path);
        }
        
        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false 
         * @static 
         */ 
        public static function mimeType($path)
        {
            return \Illuminate\Filesystem\Filesystem::mimeType($path);
        }
        
        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function size($path)
        {
            return \Illuminate\Filesystem\Filesystem::size($path);
        }
        
        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function lastModified($path)
        {
            return \Illuminate\Filesystem\Filesystem::lastModified($path);
        }
        
        /**
         * Determine if the given path is a directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function isDirectory($directory)
        {
            return \Illuminate\Filesystem\Filesystem::isDirectory($directory);
        }
        
        /**
         * Determine if the given path is readable.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isReadable($path)
        {
            return \Illuminate\Filesystem\Filesystem::isReadable($path);
        }
        
        /**
         * Determine if the given path is writable.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isWritable($path)
        {
            return \Illuminate\Filesystem\Filesystem::isWritable($path);
        }
        
        /**
         * Determine if the given path is a file.
         *
         * @param string $file
         * @return bool 
         * @static 
         */ 
        public static function isFile($file)
        {
            return \Illuminate\Filesystem\Filesystem::isFile($file);
        }
        
        /**
         * Find path names matching a given pattern.
         *
         * @param string $pattern
         * @param int $flags
         * @return array 
         * @static 
         */ 
        public static function glob($pattern, $flags = 0)
        {
            return \Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
        }
        
        /**
         * Get an array of all files in a directory.
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[] 
         * @static 
         */ 
        public static function files($directory, $hidden = false)
        {
            return \Illuminate\Filesystem\Filesystem::files($directory, $hidden);
        }
        
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[] 
         * @static 
         */ 
        public static function allFiles($directory, $hidden = false)
        {
            return \Illuminate\Filesystem\Filesystem::allFiles($directory, $hidden);
        }
        
        /**
         * Get all of the directories within a given directory.
         *
         * @param string $directory
         * @return array 
         * @static 
         */ 
        public static function directories($directory)
        {
            return \Illuminate\Filesystem\Filesystem::directories($directory);
        }
        
        /**
         * Create a directory.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @param bool $force
         * @return bool 
         * @static 
         */ 
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false)
        {
            return \Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive, $force);
        }
        
        /**
         * Move a directory.
         *
         * @param string $from
         * @param string $to
         * @param bool $overwrite
         * @return bool 
         * @static 
         */ 
        public static function moveDirectory($from, $to, $overwrite = false)
        {
            return \Illuminate\Filesystem\Filesystem::moveDirectory($from, $to, $overwrite);
        }
        
        /**
         * Copy a directory from one location to another.
         *
         * @param string $directory
         * @param string $destination
         * @param int $options
         * @return bool 
         * @static 
         */ 
        public static function copyDirectory($directory, $destination, $options = null)
        {
            return \Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
        }
        
        /**
         * Recursively delete a directory.
         * 
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool $preserve
         * @return bool 
         * @static 
         */ 
        public static function deleteDirectory($directory, $preserve = false)
        {
            return \Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
        }
        
        /**
         * Empty the specified directory of all files and folders.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function cleanDirectory($directory)
        {
            return \Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Filesystem\Filesystem::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Filesystem\Filesystem::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Filesystem\Filesystem::hasMacro($name);
        }
         
    }

    class Gate {
        
        /**
         * Determine if a given ability has been defined.
         *
         * @param string|array $ability
         * @return bool 
         * @static 
         */ 
        public static function has($ability)
        {
            return \Illuminate\Auth\Access\Gate::has($ability);
        }
        
        /**
         * Define a new ability.
         *
         * @param string $ability
         * @param callable|string $callback
         * @return $this 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function define($ability, $callback)
        {
            return \Illuminate\Auth\Access\Gate::define($ability, $callback);
        }
        
        /**
         * Define abilities for a resource.
         *
         * @param string $name
         * @param string $class
         * @param array $abilities
         * @return $this 
         * @static 
         */ 
        public static function resource($name, $class, $abilities = null)
        {
            return \Illuminate\Auth\Access\Gate::resource($name, $class, $abilities);
        }
        
        /**
         * Define a policy class for a given class type.
         *
         * @param string $class
         * @param string $policy
         * @return $this 
         * @static 
         */ 
        public static function policy($class, $policy)
        {
            return \Illuminate\Auth\Access\Gate::policy($class, $policy);
        }
        
        /**
         * Register a callback to run before all Gate checks.
         *
         * @param callable $callback
         * @return $this 
         * @static 
         */ 
        public static function before($callback)
        {
            return \Illuminate\Auth\Access\Gate::before($callback);
        }
        
        /**
         * Register a callback to run after all Gate checks.
         *
         * @param callable $callback
         * @return $this 
         * @static 
         */ 
        public static function after($callback)
        {
            return \Illuminate\Auth\Access\Gate::after($callback);
        }
        
        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function allows($ability, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::allows($ability, $arguments);
        }
        
        /**
         * Determine if the given ability should be denied for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function denies($ability, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::denies($ability, $arguments);
        }
        
        /**
         * Determine if all of the given abilities should be granted for the current user.
         *
         * @param \Illuminate\Auth\Access\iterable|string $abilities
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function check($abilities, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::check($abilities, $arguments);
        }
        
        /**
         * Determine if any one of the given abilities should be granted for the current user.
         *
         * @param \Illuminate\Auth\Access\iterable|string $abilities
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function any($abilities, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::any($abilities, $arguments);
        }
        
        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return \Illuminate\Auth\Access\Response 
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static 
         */ 
        public static function authorize($ability, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::authorize($ability, $arguments);
        }
        
        /**
         * Get a policy instance for a given class.
         *
         * @param object|string $class
         * @return mixed 
         * @static 
         */ 
        public static function getPolicyFor($class)
        {
            return \Illuminate\Auth\Access\Gate::getPolicyFor($class);
        }
        
        /**
         * Build a policy class instance of the given type.
         *
         * @param object|string $class
         * @return mixed 
         * @static 
         */ 
        public static function resolvePolicy($class)
        {
            return \Illuminate\Auth\Access\Gate::resolvePolicy($class);
        }
        
        /**
         * Get a gate instance for the given user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable|mixed $user
         * @return static 
         * @static 
         */ 
        public static function forUser($user)
        {
            return \Illuminate\Auth\Access\Gate::forUser($user);
        }
        
        /**
         * Get all of the defined abilities.
         *
         * @return array 
         * @static 
         */ 
        public static function abilities()
        {
            return \Illuminate\Auth\Access\Gate::abilities();
        }
        
        /**
         * Get all of the defined policies.
         *
         * @return array 
         * @static 
         */ 
        public static function policies()
        {
            return \Illuminate\Auth\Access\Gate::policies();
        }
         
    }

    class Hash {
        
        /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function make($value, $options = array())
        {
            return \Illuminate\Hashing\BcryptHasher::make($value, $options);
        }
        
        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */ 
        public static function check($value, $hashedValue, $options = array())
        {
            return \Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
        }
        
        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */ 
        public static function needsRehash($hashedValue, $options = array())
        {
            return \Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
        }
        
        /**
         * Set the default password work factor.
         *
         * @param int $rounds
         * @return $this 
         * @static 
         */ 
        public static function setRounds($rounds)
        {
            return \Illuminate\Hashing\BcryptHasher::setRounds($rounds);
        }
         
    }

    class Lang {
        
        /**
         * Determine if a translation exists for a given locale.
         *
         * @param string $key
         * @param string|null $locale
         * @return bool 
         * @static 
         */ 
        public static function hasForLocale($key, $locale = null)
        {
            return \Illuminate\Translation\Translator::hasForLocale($key, $locale);
        }
        
        /**
         * Determine if a translation exists.
         *
         * @param string $key
         * @param string|null $locale
         * @param bool $fallback
         * @return bool 
         * @static 
         */ 
        public static function has($key, $locale = null, $fallback = true)
        {
            return \Illuminate\Translation\Translator::has($key, $locale, $fallback);
        }
        
        /**
         * Get the translation for a given key.
         *
         * @param string $key
         * @param array $replace
         * @param string $locale
         * @return string|array|null 
         * @static 
         */ 
        public static function trans($key, $replace = array(), $locale = null)
        {
            return \Illuminate\Translation\Translator::trans($key, $replace, $locale);
        }
        
        /**
         * Get the translation for the given key.
         *
         * @param string $key
         * @param array $replace
         * @param string|null $locale
         * @param bool $fallback
         * @return string|array|null 
         * @static 
         */ 
        public static function get($key, $replace = array(), $locale = null, $fallback = true)
        {
            return \Illuminate\Translation\Translator::get($key, $replace, $locale, $fallback);
        }
        
        /**
         * Get the translation for a given key from the JSON translation files.
         *
         * @param string $key
         * @param array $replace
         * @param string $locale
         * @return string|array|null 
         * @static 
         */ 
        public static function getFromJson($key, $replace = array(), $locale = null)
        {
            return \Illuminate\Translation\Translator::getFromJson($key, $replace, $locale);
        }
        
        /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param int|array|\Countable $number
         * @param array $replace
         * @param string $locale
         * @return string 
         * @static 
         */ 
        public static function transChoice($key, $number, $replace = array(), $locale = null)
        {
            return \Illuminate\Translation\Translator::transChoice($key, $number, $replace, $locale);
        }
        
        /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param int|array|\Countable $number
         * @param array $replace
         * @param string $locale
         * @return string 
         * @static 
         */ 
        public static function choice($key, $number, $replace = array(), $locale = null)
        {
            return \Illuminate\Translation\Translator::choice($key, $number, $replace, $locale);
        }
        
        /**
         * Add translation lines to the given locale.
         *
         * @param array $lines
         * @param string $locale
         * @param string $namespace
         * @return void 
         * @static 
         */ 
        public static function addLines($lines, $locale, $namespace = '*')
        {
            \Illuminate\Translation\Translator::addLines($lines, $locale, $namespace);
        }
        
        /**
         * Load the specified language group.
         *
         * @param string $namespace
         * @param string $group
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function load($namespace, $group, $locale)
        {
            \Illuminate\Translation\Translator::load($namespace, $group, $locale);
        }
        
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         * @return void 
         * @static 
         */ 
        public static function addNamespace($namespace, $hint)
        {
            \Illuminate\Translation\Translator::addNamespace($namespace, $hint);
        }
        
        /**
         * Add a new JSON path to the loader.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function addJsonPath($path)
        {
            \Illuminate\Translation\Translator::addJsonPath($path);
        }
        
        /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array 
         * @static 
         */ 
        public static function parseKey($key)
        {
            return \Illuminate\Translation\Translator::parseKey($key);
        }
        
        /**
         * Get the message selector instance.
         *
         * @return \Illuminate\Translation\MessageSelector 
         * @static 
         */ 
        public static function getSelector()
        {
            return \Illuminate\Translation\Translator::getSelector();
        }
        
        /**
         * Set the message selector instance.
         *
         * @param \Illuminate\Translation\MessageSelector $selector
         * @return void 
         * @static 
         */ 
        public static function setSelector($selector)
        {
            \Illuminate\Translation\Translator::setSelector($selector);
        }
        
        /**
         * Get the language line loader implementation.
         *
         * @return \Illuminate\Contracts\Translation\Loader 
         * @static 
         */ 
        public static function getLoader()
        {
            return \Illuminate\Translation\Translator::getLoader();
        }
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function locale()
        {
            return \Illuminate\Translation\Translator::locale();
        }
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {
            return \Illuminate\Translation\Translator::getLocale();
        }
        
        /**
         * Set the default locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function setLocale($locale)
        {
            \Illuminate\Translation\Translator::setLocale($locale);
        }
        
        /**
         * Get the fallback locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function getFallback()
        {
            return \Illuminate\Translation\Translator::getFallback();
        }
        
        /**
         * Set the fallback locale being used.
         *
         * @param string $fallback
         * @return void 
         * @static 
         */ 
        public static function setFallback($fallback)
        {
            \Illuminate\Translation\Translator::setFallback($fallback);
        }
        
        /**
         * Set the parsed value of a key.
         *
         * @param string $key
         * @param array $parsed
         * @return void 
         * @static 
         */ 
        public static function setParsedKey($key, $parsed)
        {
            //Method inherited from \Illuminate\Support\NamespacedItemResolver            
            \Illuminate\Translation\Translator::setParsedKey($key, $parsed);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Translation\Translator::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Translation\Translator::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Translation\Translator::hasMacro($name);
        }
         
    }

    class Log {
        
        /**
         * Adds a log record at the DEBUG level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function debug($message, $context = array())
        {
            return \Monolog\Logger::debug($message, $context);
        }
        
        /**
         * Adds a log record at the INFO level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function info($message, $context = array())
        {
            return \Monolog\Logger::info($message, $context);
        }
        
        /**
         * Adds a log record at the NOTICE level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function notice($message, $context = array())
        {
            return \Monolog\Logger::notice($message, $context);
        }
        
        /**
         * Adds a log record at the WARNING level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function warning($message, $context = array())
        {
            return \Monolog\Logger::warning($message, $context);
        }
        
        /**
         * Adds a log record at the ERROR level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function error($message, $context = array())
        {
            return \Monolog\Logger::error($message, $context);
        }
        
        /**
         * Adds a log record at the CRITICAL level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function critical($message, $context = array())
        {
            return \Monolog\Logger::critical($message, $context);
        }
        
        /**
         * Adds a log record at the ALERT level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function alert($message, $context = array())
        {
            return \Monolog\Logger::alert($message, $context);
        }
        
        /**
         * Adds a log record at the EMERGENCY level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function emergency($message, $context = array())
        {
            return \Monolog\Logger::emergency($message, $context);
        }
        
        /**
         * Log a message to the logs.
         *
         * @param string $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function log($level, $message, $context = array())
        {
            \Illuminate\Log\Writer::log($level, $message, $context);
        }
        
        /**
         * Dynamically pass log calls into the writer.
         *
         * @param string $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function write($level, $message, $context = array())
        {
            \Illuminate\Log\Writer::write($level, $message, $context);
        }
        
        /**
         * Register a file log handler.
         *
         * @param string $path
         * @param string $level
         * @return void 
         * @static 
         */ 
        public static function useFiles($path, $level = 'debug')
        {
            \Illuminate\Log\Writer::useFiles($path, $level);
        }
        
        /**
         * Register a daily file log handler.
         *
         * @param string $path
         * @param int $days
         * @param string $level
         * @return void 
         * @static 
         */ 
        public static function useDailyFiles($path, $days = 0, $level = 'debug')
        {
            \Illuminate\Log\Writer::useDailyFiles($path, $days, $level);
        }
        
        /**
         * Register a Syslog handler.
         *
         * @param string $name
         * @param string $level
         * @param mixed $facility
         * @return \Psr\Log\LoggerInterface 
         * @static 
         */ 
        public static function useSyslog($name = 'laravel', $level = 'debug', $facility = 8)
        {
            return \Illuminate\Log\Writer::useSyslog($name, $level, $facility);
        }
        
        /**
         * Register an error_log handler.
         *
         * @param string $level
         * @param int $messageType
         * @return void 
         * @static 
         */ 
        public static function useErrorLog($level = 'debug', $messageType = 0)
        {
            \Illuminate\Log\Writer::useErrorLog($level, $messageType);
        }
        
        /**
         * Register a new callback handler for when a log event is triggered.
         *
         * @param \Closure $callback
         * @return void 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function listen($callback)
        {
            \Illuminate\Log\Writer::listen($callback);
        }
        
        /**
         * Get the underlying Monolog instance.
         *
         * @return \Monolog\Logger 
         * @static 
         */ 
        public static function getMonolog()
        {
            return \Illuminate\Log\Writer::getMonolog();
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getEventDispatcher()
        {
            return \Illuminate\Log\Writer::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($dispatcher)
        {
            \Illuminate\Log\Writer::setEventDispatcher($dispatcher);
        }
         
    }

    class Mail {
        
        /**
         * Set the global from address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function alwaysFrom($address, $name = null)
        {
            \Illuminate\Mail\Mailer::alwaysFrom($address, $name);
        }
        
        /**
         * Set the global reply-to address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function alwaysReplyTo($address, $name = null)
        {
            \Illuminate\Mail\Mailer::alwaysReplyTo($address, $name);
        }
        
        /**
         * Set the global to address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function alwaysTo($address, $name = null)
        {
            \Illuminate\Mail\Mailer::alwaysTo($address, $name);
        }
        
        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return \Illuminate\Mail\PendingMail 
         * @static 
         */ 
        public static function to($users)
        {
            return \Illuminate\Mail\Mailer::to($users);
        }
        
        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return \Illuminate\Mail\PendingMail 
         * @static 
         */ 
        public static function bcc($users)
        {
            return \Illuminate\Mail\Mailer::bcc($users);
        }
        
        /**
         * Send a new message when only a raw text part.
         *
         * @param string $text
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function raw($text, $callback)
        {
            \Illuminate\Mail\Mailer::raw($text, $callback);
        }
        
        /**
         * Send a new message when only a plain part.
         *
         * @param string $view
         * @param array $data
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function plain($view, $data, $callback)
        {
            \Illuminate\Mail\Mailer::plain($view, $data, $callback);
        }
        
        /**
         * Render the given message as a view.
         *
         * @param string|array $view
         * @param array $data
         * @return string 
         * @static 
         */ 
        public static function render($view, $data = array())
        {
            return \Illuminate\Mail\Mailer::render($view, $data);
        }
        
        /**
         * Send a new message using a view.
         *
         * @param string|array|\Illuminate\Mail\MailableContract $view
         * @param array $data
         * @param \Closure|string $callback
         * @return void 
         * @static 
         */ 
        public static function send($view, $data = array(), $callback = null)
        {
            \Illuminate\Mail\Mailer::send($view, $data, $callback);
        }
        
        /**
         * Queue a new e-mail message for sending.
         *
         * @param string|array|\Illuminate\Mail\MailableContract $view
         * @param string|null $queue
         * @return mixed 
         * @static 
         */ 
        public static function queue($view, $queue = null)
        {
            return \Illuminate\Mail\Mailer::queue($view, $queue);
        }
        
        /**
         * Queue a new e-mail message for sending on the given queue.
         *
         * @param string $queue
         * @param string|array $view
         * @return mixed 
         * @static 
         */ 
        public static function onQueue($queue, $view)
        {
            return \Illuminate\Mail\Mailer::onQueue($queue, $view);
        }
        
        /**
         * Queue a new e-mail message for sending on the given queue.
         * 
         * This method didn't match rest of framework's "onQueue" phrasing. Added "onQueue".
         *
         * @param string $queue
         * @param string|array $view
         * @return mixed 
         * @static 
         */ 
        public static function queueOn($queue, $view)
        {
            return \Illuminate\Mail\Mailer::queueOn($queue, $view);
        }
        
        /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string|array|\Illuminate\Mail\MailableContract $view
         * @param string|null $queue
         * @return mixed 
         * @static 
         */ 
        public static function later($delay, $view, $queue = null)
        {
            return \Illuminate\Mail\Mailer::later($delay, $view, $queue);
        }
        
        /**
         * Queue a new e-mail message for sending after (n) seconds on the given queue.
         *
         * @param string $queue
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string|array $view
         * @return mixed 
         * @static 
         */ 
        public static function laterOn($queue, $delay, $view)
        {
            return \Illuminate\Mail\Mailer::laterOn($queue, $delay, $view);
        }
        
        /**
         * Get the view factory instance.
         *
         * @return \Illuminate\Contracts\View\Factory 
         * @static 
         */ 
        public static function getViewFactory()
        {
            return \Illuminate\Mail\Mailer::getViewFactory();
        }
        
        /**
         * Get the Swift Mailer instance.
         *
         * @return \Swift_Mailer 
         * @static 
         */ 
        public static function getSwiftMailer()
        {
            return \Illuminate\Mail\Mailer::getSwiftMailer();
        }
        
        /**
         * Get the array of failed recipients.
         *
         * @return array 
         * @static 
         */ 
        public static function failures()
        {
            return \Illuminate\Mail\Mailer::failures();
        }
        
        /**
         * Set the Swift Mailer instance.
         *
         * @param \Swift_Mailer $swift
         * @return void 
         * @static 
         */ 
        public static function setSwiftMailer($swift)
        {
            \Illuminate\Mail\Mailer::setSwiftMailer($swift);
        }
        
        /**
         * Set the queue manager instance.
         *
         * @param \Illuminate\Contracts\Queue\Factory $queue
         * @return $this 
         * @static 
         */ 
        public static function setQueue($queue)
        {
            return \Illuminate\Mail\Mailer::setQueue($queue);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Mail\Mailer::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Mail\Mailer::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Mail\Mailer::hasMacro($name);
        }
         
    }

    class Notification {
        
        /**
         * Send the given notification to the given notifiable entities.
         *
         * @param \Illuminate\Support\Collection|array|mixed $notifiables
         * @param mixed $notification
         * @return void 
         * @static 
         */ 
        public static function send($notifiables, $notification)
        {
            \Illuminate\Notifications\ChannelManager::send($notifiables, $notification);
        }
        
        /**
         * Send the given notification immediately.
         *
         * @param \Illuminate\Support\Collection|array|mixed $notifiables
         * @param mixed $notification
         * @param array|null $channels
         * @return void 
         * @static 
         */ 
        public static function sendNow($notifiables, $notification, $channels = null)
        {
            \Illuminate\Notifications\ChannelManager::sendNow($notifiables, $notification, $channels);
        }
        
        /**
         * Get a channel instance.
         *
         * @param string|null $name
         * @return mixed 
         * @static 
         */ 
        public static function channel($name = null)
        {
            return \Illuminate\Notifications\ChannelManager::channel($name);
        }
        
        /**
         * Get the default channel driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Notifications\ChannelManager::getDefaultDriver();
        }
        
        /**
         * Get the default channel driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function deliversVia()
        {
            return \Illuminate\Notifications\ChannelManager::deliversVia();
        }
        
        /**
         * Set the default channel driver name.
         *
         * @param string $channel
         * @return void 
         * @static 
         */ 
        public static function deliverVia($channel)
        {
            \Illuminate\Notifications\ChannelManager::deliverVia($channel);
        }
        
        /**
         * Get a driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Notifications\ChannelManager::driver($driver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Notifications\ChannelManager::extend($driver, $callback);
        }
        
        /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */ 
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Notifications\ChannelManager::getDrivers();
        }
         
    }

    class Password {
        
        /**
         * Attempt to get the broker from the local cache.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Auth\PasswordBroker 
         * @static 
         */ 
        public static function broker($name = null)
        {
            return \Illuminate\Auth\Passwords\PasswordBrokerManager::broker($name);
        }
        
        /**
         * Get the default password broker name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Auth\Passwords\PasswordBrokerManager::getDefaultDriver();
        }
        
        /**
         * Set the default password broker name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Auth\Passwords\PasswordBrokerManager::setDefaultDriver($name);
        }
         
    }

    class Queue {
        
        /**
         * Register an event listener for the before job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function before($callback)
        {
            \Illuminate\Queue\QueueManager::before($callback);
        }
        
        /**
         * Register an event listener for the after job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function after($callback)
        {
            \Illuminate\Queue\QueueManager::after($callback);
        }
        
        /**
         * Register an event listener for the exception occurred job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function exceptionOccurred($callback)
        {
            \Illuminate\Queue\QueueManager::exceptionOccurred($callback);
        }
        
        /**
         * Register an event listener for the daemon queue loop.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function looping($callback)
        {
            \Illuminate\Queue\QueueManager::looping($callback);
        }
        
        /**
         * Register an event listener for the failed job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function failing($callback)
        {
            \Illuminate\Queue\QueueManager::failing($callback);
        }
        
        /**
         * Register an event listener for the daemon queue stopping.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function stopping($callback)
        {
            \Illuminate\Queue\QueueManager::stopping($callback);
        }
        
        /**
         * Determine if the driver is connected.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function connected($name = null)
        {
            return \Illuminate\Queue\QueueManager::connected($name);
        }
        
        /**
         * Resolve a queue connection instance.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Queue\Queue 
         * @static 
         */ 
        public static function connection($name = null)
        {
            return \Illuminate\Queue\QueueManager::connection($name);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function extend($driver, $resolver)
        {
            \Illuminate\Queue\QueueManager::extend($driver, $resolver);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function addConnector($driver, $resolver)
        {
            \Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
        }
        
        /**
         * Get the name of the default queue connection.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Queue\QueueManager::getDefaultDriver();
        }
        
        /**
         * Set the name of the default queue connection.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Queue\QueueManager::setDefaultDriver($name);
        }
        
        /**
         * Get the full name for the given connection.
         *
         * @param string $connection
         * @return string 
         * @static 
         */ 
        public static function getName($connection = null)
        {
            return \Illuminate\Queue\QueueManager::getName($connection);
        }
        
        /**
         * Determine if the application is in maintenance mode.
         *
         * @return bool 
         * @static 
         */ 
        public static function isDownForMaintenance()
        {
            return \Illuminate\Queue\QueueManager::isDownForMaintenance();
        }
        
        /**
         * Get the size of the queue.
         *
         * @param string $queue
         * @return int 
         * @static 
         */ 
        public static function size($queue = null)
        {
            return \Illuminate\Queue\SyncQueue::size($queue);
        }
        
        /**
         * Push a new job onto the queue.
         *
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @throws \Exception|\Throwable
         * @static 
         */ 
        public static function push($job, $data = '', $queue = null)
        {
            return \Illuminate\Queue\SyncQueue::push($job, $data, $queue);
        }
        
        /**
         * Push a raw payload onto the queue.
         *
         * @param string $payload
         * @param string $queue
         * @param array $options
         * @return mixed 
         * @static 
         */ 
        public static function pushRaw($payload, $queue = null, $options = array())
        {
            return \Illuminate\Queue\SyncQueue::pushRaw($payload, $queue, $options);
        }
        
        /**
         * Push a new job onto the queue after a delay.
         *
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */ 
        public static function later($delay, $job, $data = '', $queue = null)
        {
            return \Illuminate\Queue\SyncQueue::later($delay, $job, $data, $queue);
        }
        
        /**
         * Pop the next job off of the queue.
         *
         * @param string $queue
         * @return \Illuminate\Contracts\Queue\Job|null 
         * @static 
         */ 
        public static function pop($queue = null)
        {
            return \Illuminate\Queue\SyncQueue::pop($queue);
        }
        
        /**
         * Push a new job onto the queue.
         *
         * @param string $queue
         * @param string $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */ 
        public static function pushOn($queue, $job, $data = '')
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::pushOn($queue, $job, $data);
        }
        
        /**
         * Push a new job onto the queue after a delay.
         *
         * @param string $queue
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */ 
        public static function laterOn($queue, $delay, $job, $data = '')
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::laterOn($queue, $delay, $job, $data);
        }
        
        /**
         * Push an array of jobs onto the queue.
         *
         * @param array $jobs
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */ 
        public static function bulk($jobs, $data = '', $queue = null)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::bulk($jobs, $data, $queue);
        }
        
        /**
         * Get the expiration timestamp for an object-based queue handler.
         *
         * @param mixed $job
         * @return mixed 
         * @static 
         */ 
        public static function getJobExpiration($job)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::getJobExpiration($job);
        }
        
        /**
         * Get the connection name for the queue.
         *
         * @return string 
         * @static 
         */ 
        public static function getConnectionName()
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::getConnectionName();
        }
        
        /**
         * Set the connection name for the queue.
         *
         * @param string $name
         * @return $this 
         * @static 
         */ 
        public static function setConnectionName($name)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::setConnectionName($name);
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         * @return void 
         * @static 
         */ 
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            \Illuminate\Queue\SyncQueue::setContainer($container);
        }
         
    }

    class Redirect {
        
        /**
         * Create a new redirect response to the "home" route.
         *
         * @param int $status
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function home($status = 302)
        {
            return \Illuminate\Routing\Redirector::home($status);
        }
        
        /**
         * Create a new redirect response to the previous location.
         *
         * @param int $status
         * @param array $headers
         * @param mixed $fallback
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function back($status = 302, $headers = array(), $fallback = false)
        {
            return \Illuminate\Routing\Redirector::back($status, $headers, $fallback);
        }
        
        /**
         * Create a new redirect response to the current URI.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function refresh($status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::refresh($status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function guest($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function intended($default = '/', $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function to($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to an external URL (no validation).
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function away($path, $status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::away($path, $status, $headers);
        }
        
        /**
         * Create a new redirect response to the given HTTPS path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function secure($path, $status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::secure($path, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function route($route, $parameters = array(), $status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function action($action, $parameters = array(), $status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
        }
        
        /**
         * Get the URL generator instance.
         *
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */ 
        public static function getUrlGenerator()
        {
            return \Illuminate\Routing\Redirector::getUrlGenerator();
        }
        
        /**
         * Set the active session store.
         *
         * @param \Illuminate\Session\Store $session
         * @return void 
         * @static 
         */ 
        public static function setSession($session)
        {
            \Illuminate\Routing\Redirector::setSession($session);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\Redirector::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Routing\Redirector::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\Redirector::hasMacro($name);
        }
         
    }

    class Request {
        
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static 
         * @static 
         */ 
        public static function capture()
        {
            return \Illuminate\Http\Request::capture();
        }
        
        /**
         * Return the Request instance.
         *
         * @return $this 
         * @static 
         */ 
        public static function instance()
        {
            return \Illuminate\Http\Request::instance();
        }
        
        /**
         * Get the request method.
         *
         * @return string 
         * @static 
         */ 
        public static function method()
        {
            return \Illuminate\Http\Request::method();
        }
        
        /**
         * Get the root URL for the application.
         *
         * @return string 
         * @static 
         */ 
        public static function root()
        {
            return \Illuminate\Http\Request::root();
        }
        
        /**
         * Get the URL (no query string) for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function url()
        {
            return \Illuminate\Http\Request::url();
        }
        
        /**
         * Get the full URL for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function fullUrl()
        {
            return \Illuminate\Http\Request::fullUrl();
        }
        
        /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param array $query
         * @return string 
         * @static 
         */ 
        public static function fullUrlWithQuery($query)
        {
            return \Illuminate\Http\Request::fullUrlWithQuery($query);
        }
        
        /**
         * Get the current path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function path()
        {
            return \Illuminate\Http\Request::path();
        }
        
        /**
         * Get the current decoded path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function decodedPath()
        {
            return \Illuminate\Http\Request::decodedPath();
        }
        
        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null 
         * @static 
         */ 
        public static function segment($index, $default = null)
        {
            return \Illuminate\Http\Request::segment($index, $default);
        }
        
        /**
         * Get all of the segments for the request path.
         *
         * @return array 
         * @static 
         */ 
        public static function segments()
        {
            return \Illuminate\Http\Request::segments();
        }
        
        /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function is($patterns = null)
        {
            return \Illuminate\Http\Request::is($patterns);
        }
        
        /**
         * Determine if the route name matches a given pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function routeIs($patterns = null)
        {
            return \Illuminate\Http\Request::routeIs($patterns);
        }
        
        /**
         * Determine if the current request URL and query string matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function fullUrlIs($patterns = null)
        {
            return \Illuminate\Http\Request::fullUrlIs($patterns);
        }
        
        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function ajax()
        {
            return \Illuminate\Http\Request::ajax();
        }
        
        /**
         * Determine if the request is the result of an PJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function pjax()
        {
            return \Illuminate\Http\Request::pjax();
        }
        
        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool 
         * @static 
         */ 
        public static function secure()
        {
            return \Illuminate\Http\Request::secure();
        }
        
        /**
         * Get the client IP address.
         *
         * @return string 
         * @static 
         */ 
        public static function ip()
        {
            return \Illuminate\Http\Request::ip();
        }
        
        /**
         * Get the client IP addresses.
         *
         * @return array 
         * @static 
         */ 
        public static function ips()
        {
            return \Illuminate\Http\Request::ips();
        }
        
        /**
         * Get the client user agent.
         *
         * @return string 
         * @static 
         */ 
        public static function userAgent()
        {
            return \Illuminate\Http\Request::userAgent();
        }
        
        /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function merge($input)
        {
            return \Illuminate\Http\Request::merge($input);
        }
        
        /**
         * Replace the input for the current request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function replace($input)
        {
            return \Illuminate\Http\Request::replace($input);
        }
        
        /**
         * Get the JSON payload for the request.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function json($key = null, $default = null)
        {
            return \Illuminate\Http\Request::json($key, $default);
        }
        
        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function createFromBase($request)
        {
            return \Illuminate\Http\Request::createFromBase($request);
        }
        
        /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @return static 
         * @static 
         */ 
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null)
        {
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        
        /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Session\Store 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function session()
        {
            return \Illuminate\Http\Request::session();
        }
        
        /**
         * Set the session instance on the request.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @return void 
         * @static 
         */ 
        public static function setLaravelSession($session)
        {
            \Illuminate\Http\Request::setLaravelSession($session);
        }
        
        /**
         * Get the user making the request.
         *
         * @param string|null $guard
         * @return mixed 
         * @static 
         */ 
        public static function user($guard = null)
        {
            return \Illuminate\Http\Request::user($guard);
        }
        
        /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @return \Illuminate\Routing\Route|object|string 
         * @static 
         */ 
        public static function route($param = null)
        {
            return \Illuminate\Http\Request::route($param);
        }
        
        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function fingerprint()
        {
            return \Illuminate\Http\Request::fingerprint();
        }
        
        /**
         * Set the JSON payload for the request.
         *
         * @param array $json
         * @return $this 
         * @static 
         */ 
        public static function setJson($json)
        {
            return \Illuminate\Http\Request::setJson($json);
        }
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getUserResolver()
        {
            return \Illuminate\Http\Request::getUserResolver();
        }
        
        /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function setUserResolver($callback)
        {
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
        
        /**
         * Get the route resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getRouteResolver()
        {
            return \Illuminate\Http\Request::getRouteResolver();
        }
        
        /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function setRouteResolver($callback)
        {
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */ 
        public static function toArray()
        {
            return \Illuminate\Http\Request::toArray();
        }
        
        /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($offset)
        {
            return \Illuminate\Http\Request::offsetExists($offset);
        }
        
        /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($offset)
        {
            return \Illuminate\Http\Request::offsetGet($offset);
        }
        
        /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($offset, $value)
        {
            \Illuminate\Http\Request::offsetSet($offset, $value);
        }
        
        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($offset)
        {
            \Illuminate\Http\Request::offsetUnset($offset);
        }
        
        /**
         * Sets the parameters for this request.
         * 
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource $content The raw body data
         * @static 
         */ 
        public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @return static 
         * @static 
         */ 
        public static function createFromGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * Creates a Request based on a given URI and configuration.
         * 
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string $content The raw body data
         * @return static 
         * @static 
         */ 
        public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * Sets a callable able to create a Request instance.
         * 
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @param callable|null $callable A PHP callable
         * @static 
         */ 
        public static function setFactory($callable)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * Overrides the PHP global variables according to this request instance.
         * 
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static 
         */ 
        public static function overrideGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * Sets a list of trusted proxies.
         * 
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies
         * @param int $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
         * @throws \InvalidArgumentException When $trustedHeaderSet is invalid
         * @static 
         */ 
        public static function setTrustedProxies($proxies)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
        
        /**
         * Gets the list of trusted proxies.
         *
         * @return array An array of trusted proxies
         * @static 
         */ 
        public static function getTrustedProxies()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
        /**
         * Gets the set of trusted headers from trusted proxies.
         *
         * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
         * @static 
         */ 
        public static function getTrustedHeaderSet()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderSet();
        }
        
        /**
         * Sets a list of trusted host patterns.
         * 
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static 
         */ 
        public static function setTrustedHosts($hostPatterns)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
        /**
         * Gets the list of trusted host patterns.
         *
         * @return array An array of trusted host patterns
         * @static 
         */ 
        public static function getTrustedHosts()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * Sets the name for trusted headers.
         * 
         * The following header keys are supported:
         * 
         *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
         *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getHost())
         *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getPort())
         *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
         *  * Request::HEADER_FORWARDED:    defaults to Forwarded         (see RFC 7239)
         * 
         * Setting an empty value allows to disable the trusted header for the given key.
         *
         * @param string $key The header key
         * @param string $value The header name
         * @throws \InvalidArgumentException
         * @deprecated since version 3.3, to be removed in 4.0. Use the $trustedHeaderSet argument of the Request::setTrustedProxies() method instead.
         * @static 
         */ 
        public static function setTrustedHeaderName($key, $value)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
        
        /**
         * Gets the trusted proxy header name.
         *
         * @param string $key The header key
         * @return string The header name
         * @throws \InvalidArgumentException
         * @deprecated since version 3.3, to be removed in 4.0. Use the Request::getTrustedHeaderSet() method instead.
         * @static 
         */ 
        public static function getTrustedHeaderName($key)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
        
        /**
         * Normalizes a query string.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @param string $qs Query string
         * @return string A normalized query string for the Request
         * @static 
         */ 
        public static function normalizeQueryString($qs)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         * 
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         * 
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static 
         */ 
        public static function enableHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @return bool True when the _method request parameter is enabled, false otherwise
         * @static 
         */ 
        public static function getHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * Gets a "parameter" value from any bag.
         * 
         * This method is mainly useful for libraries that want to provide some flexibility. If you don't need the
         * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
         * public property instead (attributes, query, request).
         * 
         * Order of precedence: PATH (routing placeholders or custom attributes), GET, BODY
         *
         * @param string $key The key
         * @param mixed $default The default value if the parameter key does not exist
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::get($key, $default);
        }
        
        /**
         * Gets the Session.
         *
         * @return \Symfony\Component\HttpFoundation\SessionInterface|null The session
         * @static 
         */ 
        public static function getSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSession();
        }
        
        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasPreviousSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * Whether the request contains a Session object.
         * 
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @return bool true when the Request contains a Session object, false otherwise
         * @static 
         */ 
        public static function hasSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasSession();
        }
        
        /**
         * Sets the Session.
         *
         * @param \Symfony\Component\HttpFoundation\SessionInterface $session The Session
         * @static 
         */ 
        public static function setSession($session)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * Returns the client IP addresses.
         * 
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         * 
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @return array The client IP addresses
         * @see getClientIp()
         * @static 
         */ 
        public static function getClientIps()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * Returns the client IP address.
         * 
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @return string|null The client IP address
         * @see getClientIps()
         * @see http://en.wikipedia.org/wiki/X-Forwarded-For
         * @static 
         */ 
        public static function getClientIp()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * Returns current script name.
         *
         * @return string 
         * @static 
         */ 
        public static function getScriptName()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * Returns the path being requested relative to the executed script.
         * 
         * The path info always starts with a /.
         * 
         * Suppose this request is instantiated from /mysite on localhost:
         * 
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getPathInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * Returns the root path from which this request is executed.
         * 
         * Suppose that an index.php file instantiates this request object:
         * 
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBasePath()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * Returns the root URL from which this request is executed.
         * 
         * The base URL never ends with a /.
         * 
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBaseUrl()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * Gets the request's scheme.
         *
         * @return string 
         * @static 
         */ 
        public static function getScheme()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * Returns the port on which the request is made.
         * 
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Port" header must contain the client port.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Port",
         * configure it via via the $trustedHeaderSet argument of the
         * Request::setTrustedProxies() method instead.
         *
         * @return int|string can be a string if fetched from the server bag
         * @static 
         */ 
        public static function getPort()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * Returns the user.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getUser()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * Returns the password.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getPassword()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
        /**
         * Gets the user info.
         *
         * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static 
         */ 
        public static function getUserInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * Returns the HTTP host being requested.
         * 
         * The port name will be appended to the host if it's non-standard.
         *
         * @return string 
         * @static 
         */ 
        public static function getHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static 
         */ 
        public static function getRequestUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * Gets the scheme and HTTP host.
         * 
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @return string The scheme and HTTP host
         * @static 
         */ 
        public static function getSchemeAndHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @return string A normalized URI (URL) for the Request
         * @see getQueryString()
         * @static 
         */ 
        public static function getUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @return string The normalized URI for the path
         * @static 
         */ 
        public static function getUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * Returns the path as relative reference from the current Request path.
         * 
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         * 
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @param string $path The target path
         * @return string The relative target path
         * @static 
         */ 
        public static function getRelativeUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRelativeUriForPath($path);
        }
        
        /**
         * Generates the normalized query string for the Request.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @return string|null A normalized query string for the Request
         * @static 
         */ 
        public static function getQueryString()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * Checks whether the request is secure or not.
         * 
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
         * ("SSL_HTTPS" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @return bool 
         * @static 
         */ 
        public static function isSecure()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * Returns the host name.
         * 
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Host" header must contain the client host name.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Host",
         * configure it via the $trustedHeaderSet argument of the
         * Request::setTrustedProxies() method instead.
         *
         * @return string 
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         * @static 
         */ 
        public static function getHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
        /**
         * Sets the request method.
         *
         * @param string $method
         * @static 
         */ 
        public static function setMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * Gets the request "intended" method.
         * 
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         * 
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         * 
         * The method is always an uppercased string.
         *
         * @return string The request method
         * @see getRealMethod()
         * @static 
         */ 
        public static function getMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
        /**
         * Gets the "real" request method.
         *
         * @return string The request method
         * @see getMethod()
         * @static 
         */ 
        public static function getRealMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
        /**
         * Gets the mime type associated with the format.
         *
         * @param string $format The format
         * @return string The associated mime type (null if not found)
         * @static 
         */ 
        public static function getMimeType($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
        /**
         * Gets the mime types associated with the format.
         *
         * @param string $format The format
         * @return array The associated mime types
         * @static 
         */ 
        public static function getMimeTypes($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeTypes($format);
        }
        
        /**
         * Gets the format associated with the mime type.
         *
         * @param string $mimeType The associated mime type
         * @return string|null The format (null if not found)
         * @static 
         */ 
        public static function getFormat($mimeType)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * Associates a format with mime types.
         *
         * @param string $format The format
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static 
         */ 
        public static function setFormat($format, $mimeTypes)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * Gets the request format.
         * 
         * Here is the process to determine the format:
         * 
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @param string $default The default format
         * @return string The request format
         * @static 
         */ 
        public static function getRequestFormat($default = 'html')
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
        /**
         * Sets the request format.
         *
         * @param string $format The request format
         * @static 
         */ 
        public static function setRequestFormat($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setRequestFormat($format);
        }
        
        /**
         * Gets the format associated with the request.
         *
         * @return string|null The format (null if no content type is present)
         * @static 
         */ 
        public static function getContentType()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
        /**
         * Sets the default locale.
         *
         * @param string $locale
         * @static 
         */ 
        public static function setDefaultLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * Get the default locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
        /**
         * Sets the locale.
         *
         * @param string $locale
         * @static 
         */ 
        public static function setLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * Get the locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
         * @return bool 
         * @static 
         */ 
        public static function isMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
        /**
         * Checks whether or not the method is safe.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
         * @param bool $andCacheable Adds the additional condition that the method should be cacheable. True by default.
         * @return bool 
         * @static 
         */ 
        public static function isMethodSafe()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * Checks whether or not the method is idempotent.
         *
         * @return bool 
         * @static 
         */ 
        public static function isMethodIdempotent()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodIdempotent();
        }
        
        /**
         * Checks whether the method is cacheable or not.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
         * @return bool 
         * @static 
         */ 
        public static function isMethodCacheable()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodCacheable();
        }
        
        /**
         * Returns the protocol version.
         * 
         * If the application is behind a proxy, the protocol version used in the
         * requests between the client and the proxy and between the proxy and the
         * server might be different. This returns the former (from the "Via" header)
         * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
         * the latter (from the "SERVER_PROTOCOL" server parameter).
         *
         * @return string 
         * @static 
         */ 
        public static function getProtocolVersion()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getProtocolVersion();
        }
        
        /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource The request body content or a resource to read the body stream
         * @throws \LogicException
         * @static 
         */ 
        public static function getContent($asResource = false)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
        /**
         * Gets the Etags.
         *
         * @return array The entity tags
         * @static 
         */ 
        public static function getETags()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @return bool 
         * @static 
         */ 
        public static function isNoCache()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
        /**
         * Returns the preferred language.
         *
         * @param array $locales An array of ordered available locales
         * @return string|null The preferred locale
         * @static 
         */ 
        public static function getPreferredLanguage($locales = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
        /**
         * Gets a list of languages acceptable by the client browser.
         *
         * @return array Languages ordered in the user browser preferences
         * @static 
         */ 
        public static function getLanguages()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
        /**
         * Gets a list of charsets acceptable by the client browser.
         *
         * @return array List of charsets in preferable order
         * @static 
         */ 
        public static function getCharsets()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
        /**
         * Gets a list of encodings acceptable by the client browser.
         *
         * @return array List of encodings in preferable order
         * @static 
         */ 
        public static function getEncodings()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
        /**
         * Gets a list of content types acceptable by the client browser.
         *
         * @return array List of content types in preferable order
         * @static 
         */ 
        public static function getAcceptableContentTypes()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * Returns true if the request is a XMLHttpRequest.
         * 
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @see http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @return bool true if the request is an XMLHttpRequest, false otherwise
         * @static 
         */ 
        public static function isXmlHttpRequest()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
        /**
         * Indicates whether this request originated from a trusted proxy.
         * 
         * This can be useful to determine whether or not to trust the
         * contents of a proxy-specific header.
         *
         * @return bool true if the request came from a trusted proxy, false otherwise
         * @static 
         */ 
        public static function isFromTrustedProxy()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isFromTrustedProxy();
        }
        
        /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool 
         * @static 
         */ 
        public static function matchesType($actual, $type)
        {
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }
        
        /**
         * Determine if the request is sending JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function isJson()
        {
            return \Illuminate\Http\Request::isJson();
        }
        
        /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool 
         * @static 
         */ 
        public static function expectsJson()
        {
            return \Illuminate\Http\Request::expectsJson();
        }
        
        /**
         * Determine if the current request is asking for JSON in return.
         *
         * @return bool 
         * @static 
         */ 
        public static function wantsJson()
        {
            return \Illuminate\Http\Request::wantsJson();
        }
        
        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool 
         * @static 
         */ 
        public static function accepts($contentTypes)
        {
            return \Illuminate\Http\Request::accepts($contentTypes);
        }
        
        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null 
         * @static 
         */ 
        public static function prefers($contentTypes)
        {
            return \Illuminate\Http\Request::prefers($contentTypes);
        }
        
        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsJson()
        {
            return \Illuminate\Http\Request::acceptsJson();
        }
        
        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsHtml()
        {
            return \Illuminate\Http\Request::acceptsHtml();
        }
        
        /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function format($default = 'html')
        {
            return \Illuminate\Http\Request::format($default);
        }
        
        /**
         * Retrieve an old input item.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function old($key = null, $default = null)
        {
            return \Illuminate\Http\Request::old($key, $default);
        }
        
        /**
         * Flash the input for the current request to the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flash()
        {
            \Illuminate\Http\Request::flash();
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashOnly($keys)
        {
            \Illuminate\Http\Request::flashOnly($keys);
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashExcept($keys)
        {
            \Illuminate\Http\Request::flashExcept($keys);
        }
        
        /**
         * Flush all of the old input from the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
            \Illuminate\Http\Request::flush();
        }
        
        /**
         * Retrieve a server variable from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function server($key = null, $default = null)
        {
            return \Illuminate\Http\Request::server($key, $default);
        }
        
        /**
         * Determine if a header is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasHeader($key)
        {
            return \Illuminate\Http\Request::hasHeader($key);
        }
        
        /**
         * Retrieve a header from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function header($key = null, $default = null)
        {
            return \Illuminate\Http\Request::header($key, $default);
        }
        
        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null 
         * @static 
         */ 
        public static function bearerToken()
        {
            return \Illuminate\Http\Request::bearerToken();
        }
        
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function exists($key)
        {
            return \Illuminate\Http\Request::exists($key);
        }
        
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            return \Illuminate\Http\Request::has($key);
        }
        
        /**
         * Determine if the request contains any of the given inputs.
         *
         * @param mixed $key
         * @return bool 
         * @static 
         */ 
        public static function hasAny($keys = null)
        {
            return \Illuminate\Http\Request::hasAny($keys);
        }
        
        /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function filled($key)
        {
            return \Illuminate\Http\Request::filled($key);
        }
        
        /**
         * Get the keys for all of the input and files.
         *
         * @return array 
         * @static 
         */ 
        public static function keys()
        {
            return \Illuminate\Http\Request::keys();
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function all($keys = null)
        {
            return \Illuminate\Http\Request::all($keys);
        }
        
        /**
         * Retrieve an input item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function input($key = null, $default = null)
        {
            return \Illuminate\Http\Request::input($key, $default);
        }
        
        /**
         * Get a subset containing the provided keys with values from the input data.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function only($keys)
        {
            return \Illuminate\Http\Request::only($keys);
        }
        
        /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function except($keys)
        {
            return \Illuminate\Http\Request::except($keys);
        }
        
        /**
         * Retrieve a query string item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function query($key = null, $default = null)
        {
            return \Illuminate\Http\Request::query($key, $default);
        }
        
        /**
         * Retrieve a request payload item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function post($key = null, $default = null)
        {
            return \Illuminate\Http\Request::post($key, $default);
        }
        
        /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasCookie($key)
        {
            return \Illuminate\Http\Request::hasCookie($key);
        }
        
        /**
         * Retrieve a cookie from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function cookie($key = null, $default = null)
        {
            return \Illuminate\Http\Request::cookie($key, $default);
        }
        
        /**
         * Get an array of all of the files on the request.
         *
         * @return array 
         * @static 
         */ 
        public static function allFiles()
        {
            return \Illuminate\Http\Request::allFiles();
        }
        
        /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasFile($key)
        {
            return \Illuminate\Http\Request::hasFile($key);
        }
        
        /**
         * Retrieve a file from the request.
         *
         * @param string $key
         * @param mixed $default
         * @return \Illuminate\Http\UploadedFile|array|null 
         * @static 
         */ 
        public static function file($key = null, $default = null)
        {
            return \Illuminate\Http\Request::file($key, $default);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Http\Request::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Http\Request::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Http\Request::hasMacro($name);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function validate($rules, $params = null)
        {
            return \Illuminate\Http\Request::validate($rules, $params);
        }
         
    }

    class Response {
        
        /**
         * Return a new response from the application.
         *
         * @param string $content
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */ 
        public static function make($content = '', $status = 200, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::make($content, $status, $headers);
        }
        
        /**
         * Return a new view response from the application.
         *
         * @param string $view
         * @param array $data
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */ 
        public static function view($view, $data = array(), $status = 200, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::view($view, $data, $status, $headers);
        }
        
        /**
         * Return a new JSON response from the application.
         *
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function json($data = array(), $status = 200, $headers = array(), $options = 0)
        {
            return \Illuminate\Routing\ResponseFactory::json($data, $status, $headers, $options);
        }
        
        /**
         * Return a new JSONP response from the application.
         *
         * @param string $callback
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function jsonp($callback, $data = array(), $status = 200, $headers = array(), $options = 0)
        {
            return \Illuminate\Routing\ResponseFactory::jsonp($callback, $data, $status, $headers, $options);
        }
        
        /**
         * Return a new streamed response from the application.
         *
         * @param \Closure $callback
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function stream($callback, $status = 200, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::stream($callback, $status, $headers);
        }
        
        /**
         * Create a new file download response.
         *
         * @param \SplFileInfo|string $file
         * @param string $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */ 
        public static function download($file, $name = null, $headers = array(), $disposition = 'attachment')
        {
            return \Illuminate\Routing\ResponseFactory::download($file, $name, $headers, $disposition);
        }
        
        /**
         * Return the raw contents of a binary file.
         *
         * @param \SplFileInfo|string $file
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */ 
        public static function file($file, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::file($file, $headers);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectTo($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectTo($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToRoute($route, $parameters = array(), $status = 302, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::redirectToRoute($route, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToAction($action, $parameters = array(), $status = 302, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::redirectToAction($action, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectGuest($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectGuest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToIntended($default = '/', $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectToIntended($default, $status, $headers, $secure);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\ResponseFactory::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Routing\ResponseFactory::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }
         
    }

    class Route {
        
        /**
         * Register a new GET route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function get($uri, $action = null)
        {
            return \Illuminate\Routing\Router::get($uri, $action);
        }
        
        /**
         * Register a new POST route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function post($uri, $action = null)
        {
            return \Illuminate\Routing\Router::post($uri, $action);
        }
        
        /**
         * Register a new PUT route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function put($uri, $action = null)
        {
            return \Illuminate\Routing\Router::put($uri, $action);
        }
        
        /**
         * Register a new PATCH route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function patch($uri, $action = null)
        {
            return \Illuminate\Routing\Router::patch($uri, $action);
        }
        
        /**
         * Register a new DELETE route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function delete($uri, $action = null)
        {
            return \Illuminate\Routing\Router::delete($uri, $action);
        }
        
        /**
         * Register a new OPTIONS route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function options($uri, $action = null)
        {
            return \Illuminate\Routing\Router::options($uri, $action);
        }
        
        /**
         * Register a new route responding to all verbs.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function any($uri, $action = null)
        {
            return \Illuminate\Routing\Router::any($uri, $action);
        }
        
        /**
         * Register a new Fallback route with the router.
         *
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function fallback($action)
        {
            return \Illuminate\Routing\Router::fallback($action);
        }
        
        /**
         * Create a redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @param int $status
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function redirect($uri, $destination, $status = 301)
        {
            return \Illuminate\Routing\Router::redirect($uri, $destination, $status);
        }
        
        /**
         * Register a new route that returns a view.
         *
         * @param string $uri
         * @param string $view
         * @param array $data
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function view($uri, $view, $data = array())
        {
            return \Illuminate\Routing\Router::view($uri, $view, $data);
        }
        
        /**
         * Register a new route with the given verbs.
         *
         * @param array|string $methods
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function match($methods, $uri, $action = null)
        {
            return \Illuminate\Routing\Router::match($methods, $uri, $action);
        }
        
        /**
         * Register an array of resource controllers.
         *
         * @param array $resources
         * @return void 
         * @static 
         */ 
        public static function resources($resources)
        {
            \Illuminate\Routing\Router::resources($resources);
        }
        
        /**
         * Route a resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration 
         * @static 
         */ 
        public static function resource($name, $controller, $options = array())
        {
            return \Illuminate\Routing\Router::resource($name, $controller, $options);
        }
        
        /**
         * Register an array of API resource controllers.
         *
         * @param array $resources
         * @return void 
         * @static 
         */ 
        public static function apiResources($resources)
        {
            \Illuminate\Routing\Router::apiResources($resources);
        }
        
        /**
         * Route an API resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration 
         * @static 
         */ 
        public static function apiResource($name, $controller, $options = array())
        {
            return \Illuminate\Routing\Router::apiResource($name, $controller, $options);
        }
        
        /**
         * Create a route group with shared attributes.
         *
         * @param array $attributes
         * @param \Closure|string $routes
         * @return void 
         * @static 
         */ 
        public static function group($attributes, $routes)
        {
            \Illuminate\Routing\Router::group($attributes, $routes);
        }
        
        /**
         * Merge the given array with the last group stack.
         *
         * @param array $new
         * @return array 
         * @static 
         */ 
        public static function mergeWithLastGroup($new)
        {
            return \Illuminate\Routing\Router::mergeWithLastGroup($new);
        }
        
        /**
         * Get the prefix from the last group on the stack.
         *
         * @return string 
         * @static 
         */ 
        public static function getLastGroupPrefix()
        {
            return \Illuminate\Routing\Router::getLastGroupPrefix();
        }
        
        /**
         * Return the response returned by the given route.
         *
         * @param string $name
         * @return mixed 
         * @static 
         */ 
        public static function respondWithRoute($name)
        {
            return \Illuminate\Routing\Router::respondWithRoute($name);
        }
        
        /**
         * Dispatch the request to the application.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function dispatch($request)
        {
            return \Illuminate\Routing\Router::dispatch($request);
        }
        
        /**
         * Dispatch the request to a route and return the response.
         *
         * @param \Illuminate\Http\Request $request
         * @return mixed 
         * @static 
         */ 
        public static function dispatchToRoute($request)
        {
            return \Illuminate\Routing\Router::dispatchToRoute($request);
        }
        
        /**
         * Gather the middleware for the given route with resolved class names.
         *
         * @param \Illuminate\Routing\Route $route
         * @return array 
         * @static 
         */ 
        public static function gatherRouteMiddleware($route)
        {
            return \Illuminate\Routing\Router::gatherRouteMiddleware($route);
        }
        
        /**
         * Create a response instance from the given value.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function prepareResponse($request, $response)
        {
            return \Illuminate\Routing\Router::prepareResponse($request, $response);
        }
        
        /**
         * Static version of prepareResponse.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function toResponse($request, $response)
        {
            return \Illuminate\Routing\Router::toResponse($request, $response);
        }
        
        /**
         * Substitute the route bindings onto the route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function substituteBindings($route)
        {
            return \Illuminate\Routing\Router::substituteBindings($route);
        }
        
        /**
         * Substitute the implicit Eloquent model bindings for the route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return void 
         * @static 
         */ 
        public static function substituteImplicitBindings($route)
        {
            \Illuminate\Routing\Router::substituteImplicitBindings($route);
        }
        
        /**
         * Register a route matched event listener.
         *
         * @param string|callable $callback
         * @return void 
         * @static 
         */ 
        public static function matched($callback)
        {
            \Illuminate\Routing\Router::matched($callback);
        }
        
        /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array 
         * @static 
         */ 
        public static function getMiddleware()
        {
            return \Illuminate\Routing\Router::getMiddleware();
        }
        
        /**
         * Register a short-hand name for a middleware.
         *
         * @param string $name
         * @param string $class
         * @return $this 
         * @static 
         */ 
        public static function aliasMiddleware($name, $class)
        {
            return \Illuminate\Routing\Router::aliasMiddleware($name, $class);
        }
        
        /**
         * Check if a middlewareGroup with the given name exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMiddlewareGroup($name)
        {
            return \Illuminate\Routing\Router::hasMiddlewareGroup($name);
        }
        
        /**
         * Get all of the defined middleware groups.
         *
         * @return array 
         * @static 
         */ 
        public static function getMiddlewareGroups()
        {
            return \Illuminate\Routing\Router::getMiddlewareGroups();
        }
        
        /**
         * Register a group of middleware.
         *
         * @param string $name
         * @param array $middleware
         * @return $this 
         * @static 
         */ 
        public static function middlewareGroup($name, $middleware)
        {
            return \Illuminate\Routing\Router::middlewareGroup($name, $middleware);
        }
        
        /**
         * Add a middleware to the beginning of a middleware group.
         * 
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return $this 
         * @static 
         */ 
        public static function prependMiddlewareToGroup($group, $middleware)
        {
            return \Illuminate\Routing\Router::prependMiddlewareToGroup($group, $middleware);
        }
        
        /**
         * Add a middleware to the end of a middleware group.
         * 
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return $this 
         * @static 
         */ 
        public static function pushMiddlewareToGroup($group, $middleware)
        {
            return \Illuminate\Routing\Router::pushMiddlewareToGroup($group, $middleware);
        }
        
        /**
         * Add a new route parameter binder.
         *
         * @param string $key
         * @param string|callable $binder
         * @return void 
         * @static 
         */ 
        public static function bind($key, $binder)
        {
            \Illuminate\Routing\Router::bind($key, $binder);
        }
        
        /**
         * Register a model binder for a wildcard.
         *
         * @param string $key
         * @param string $class
         * @param \Closure|null $callback
         * @return void 
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         * @static 
         */ 
        public static function model($key, $class, $callback = null)
        {
            \Illuminate\Routing\Router::model($key, $class, $callback);
        }
        
        /**
         * Get the binding callback for a given binding.
         *
         * @param string $key
         * @return \Closure|null 
         * @static 
         */ 
        public static function getBindingCallback($key)
        {
            return \Illuminate\Routing\Router::getBindingCallback($key);
        }
        
        /**
         * Get the global "where" patterns.
         *
         * @return array 
         * @static 
         */ 
        public static function getPatterns()
        {
            return \Illuminate\Routing\Router::getPatterns();
        }
        
        /**
         * Set a global where pattern on all routes.
         *
         * @param string $key
         * @param string $pattern
         * @return void 
         * @static 
         */ 
        public static function pattern($key, $pattern)
        {
            \Illuminate\Routing\Router::pattern($key, $pattern);
        }
        
        /**
         * Set a group of global where patterns on all routes.
         *
         * @param array $patterns
         * @return void 
         * @static 
         */ 
        public static function patterns($patterns)
        {
            \Illuminate\Routing\Router::patterns($patterns);
        }
        
        /**
         * Determine if the router currently has a group stack.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasGroupStack()
        {
            return \Illuminate\Routing\Router::hasGroupStack();
        }
        
        /**
         * Get the current group stack for the router.
         *
         * @return array 
         * @static 
         */ 
        public static function getGroupStack()
        {
            return \Illuminate\Routing\Router::getGroupStack();
        }
        
        /**
         * Get a route parameter for the current route.
         *
         * @param string $key
         * @param string $default
         * @return mixed 
         * @static 
         */ 
        public static function input($key, $default = null)
        {
            return \Illuminate\Routing\Router::input($key, $default);
        }
        
        /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function getCurrentRequest()
        {
            return \Illuminate\Routing\Router::getCurrentRequest();
        }
        
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function getCurrentRoute()
        {
            return \Illuminate\Routing\Router::getCurrentRoute();
        }
        
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function current()
        {
            return \Illuminate\Routing\Router::current();
        }
        
        /**
         * Check if a route with the given name exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function has($name)
        {
            return \Illuminate\Routing\Router::has($name);
        }
        
        /**
         * Get the current route name.
         *
         * @return string|null 
         * @static 
         */ 
        public static function currentRouteName()
        {
            return \Illuminate\Routing\Router::currentRouteName();
        }
        
        /**
         * Alias for the "currentRouteNamed" method.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function is($patterns = null)
        {
            return \Illuminate\Routing\Router::is($patterns);
        }
        
        /**
         * Determine if the current route matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function currentRouteNamed($patterns = null)
        {
            return \Illuminate\Routing\Router::currentRouteNamed($patterns);
        }
        
        /**
         * Get the current route action.
         *
         * @return string|null 
         * @static 
         */ 
        public static function currentRouteAction()
        {
            return \Illuminate\Routing\Router::currentRouteAction();
        }
        
        /**
         * Alias for the "currentRouteUses" method.
         *
         * @param array $patterns
         * @return bool 
         * @static 
         */ 
        public static function uses($patterns = null)
        {
            return \Illuminate\Routing\Router::uses($patterns);
        }
        
        /**
         * Determine if the current route action matches a given action.
         *
         * @param string $action
         * @return bool 
         * @static 
         */ 
        public static function currentRouteUses($action)
        {
            return \Illuminate\Routing\Router::currentRouteUses($action);
        }
        
        /**
         * Register the typical authentication routes for an application.
         *
         * @return void 
         * @static 
         */ 
        public static function auth()
        {
            \Illuminate\Routing\Router::auth();
        }
        
        /**
         * Set the unmapped global resource parameters to singular.
         *
         * @param bool $singular
         * @return void 
         * @static 
         */ 
        public static function singularResourceParameters($singular = true)
        {
            \Illuminate\Routing\Router::singularResourceParameters($singular);
        }
        
        /**
         * Set the global resource parameter mapping.
         *
         * @param array $parameters
         * @return void 
         * @static 
         */ 
        public static function resourceParameters($parameters = array())
        {
            \Illuminate\Routing\Router::resourceParameters($parameters);
        }
        
        /**
         * Get or set the verbs used in the resource URIs.
         *
         * @param array $verbs
         * @return array|null 
         * @static 
         */ 
        public static function resourceVerbs($verbs = array())
        {
            return \Illuminate\Routing\Router::resourceVerbs($verbs);
        }
        
        /**
         * Get the underlying route collection.
         *
         * @return \Illuminate\Routing\RouteCollection 
         * @static 
         */ 
        public static function getRoutes()
        {
            return \Illuminate\Routing\Router::getRoutes();
        }
        
        /**
         * Set the route collection instance.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return void 
         * @static 
         */ 
        public static function setRoutes($routes)
        {
            \Illuminate\Routing\Router::setRoutes($routes);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\Router::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Routing\Router::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\Router::hasMacro($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Illuminate\Routing\Router::macroCall($method, $parameters);
        }
         
    }

    class Schema {
        
        /**
         * Determine if the given table exists.
         *
         * @param string $table
         * @return bool 
         * @static 
         */ 
        public static function hasTable($table)
        {
            return \Illuminate\Database\Schema\MySqlBuilder::hasTable($table);
        }
        
        /**
         * Get the column listing for a given table.
         *
         * @param string $table
         * @return array 
         * @static 
         */ 
        public static function getColumnListing($table)
        {
            return \Illuminate\Database\Schema\MySqlBuilder::getColumnListing($table);
        }
        
        /**
         * Drop all tables from the database.
         *
         * @return void 
         * @static 
         */ 
        public static function dropAllTables()
        {
            \Illuminate\Database\Schema\MySqlBuilder::dropAllTables();
        }
        
        /**
         * Set the default string length for migrations.
         *
         * @param int $length
         * @return void 
         * @static 
         */ 
        public static function defaultStringLength($length)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::defaultStringLength($length);
        }
        
        /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @return bool 
         * @static 
         */ 
        public static function hasColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumn($table, $column);
        }
        
        /**
         * Determine if the given table has given columns.
         *
         * @param string $table
         * @param array $columns
         * @return bool 
         * @static 
         */ 
        public static function hasColumns($table, $columns)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumns($table, $columns);
        }
        
        /**
         * Get the data type for the given column name.
         *
         * @param string $table
         * @param string $column
         * @return string 
         * @static 
         */ 
        public static function getColumnType($table, $column)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::getColumnType($table, $column);
        }
        
        /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function table($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::table($table, $callback);
        }
        
        /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function create($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::create($table, $callback);
        }
        
        /**
         * Drop a table from the schema.
         *
         * @param string $table
         * @return void 
         * @static 
         */ 
        public static function drop($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::drop($table);
        }
        
        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         * @return void 
         * @static 
         */ 
        public static function dropIfExists($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::dropIfExists($table);
        }
        
        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         * @return void 
         * @static 
         */ 
        public static function rename($from, $to)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::rename($from, $to);
        }
        
        /**
         * Enable foreign key constraints.
         *
         * @return bool 
         * @static 
         */ 
        public static function enableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::enableForeignKeyConstraints();
        }
        
        /**
         * Disable foreign key constraints.
         *
         * @return bool 
         * @static 
         */ 
        public static function disableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::disableForeignKeyConstraints();
        }
        
        /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function getConnection()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::getConnection();
        }
        
        /**
         * Set the database connection instance.
         *
         * @param \Illuminate\Database\Connection $connection
         * @return $this 
         * @static 
         */ 
        public static function setConnection($connection)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::setConnection($connection);
        }
        
        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function blueprintResolver($resolver)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::blueprintResolver($resolver);
        }
         
    }

    class Session {
        
        /**
         * Get the session configuration.
         *
         * @return array 
         * @static 
         */ 
        public static function getSessionConfig()
        {
            return \Illuminate\Session\SessionManager::getSessionConfig();
        }
        
        /**
         * Get the default session driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Session\SessionManager::getDefaultDriver();
        }
        
        /**
         * Set the default session driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Session\SessionManager::setDefaultDriver($name);
        }
        
        /**
         * Get a driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::driver($driver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::extend($driver, $callback);
        }
        
        /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */ 
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::getDrivers();
        }
        
        /**
         * Start the session, reading the data from a handler.
         *
         * @return bool 
         * @static 
         */ 
        public static function start()
        {
            return \Illuminate\Session\Store::start();
        }
        
        /**
         * Save the session data to storage.
         *
         * @return bool 
         * @static 
         */ 
        public static function save()
        {
            return \Illuminate\Session\Store::save();
        }
        
        /**
         * Age the flash data for the session.
         *
         * @return void 
         * @static 
         */ 
        public static function ageFlashData()
        {
            \Illuminate\Session\Store::ageFlashData();
        }
        
        /**
         * Get all of the session data.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
            return \Illuminate\Session\Store::all();
        }
        
        /**
         * Checks if a key exists.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function exists($key)
        {
            return \Illuminate\Session\Store::exists($key);
        }
        
        /**
         * Checks if a key is present and not null.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            return \Illuminate\Session\Store::has($key);
        }
        
        /**
         * Get an item from the session.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            return \Illuminate\Session\Store::get($key, $default);
        }
        
        /**
         * Get the value of a given key and then forget it.
         *
         * @param string $key
         * @param string $default
         * @return mixed 
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
            return \Illuminate\Session\Store::pull($key, $default);
        }
        
        /**
         * Determine if the session contains old input.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasOldInput($key = null)
        {
            return \Illuminate\Session\Store::hasOldInput($key);
        }
        
        /**
         * Get the requested item from the flashed input array.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function getOldInput($key = null, $default = null)
        {
            return \Illuminate\Session\Store::getOldInput($key, $default);
        }
        
        /**
         * Replace the given session attributes entirely.
         *
         * @param array $attributes
         * @return void 
         * @static 
         */ 
        public static function replace($attributes)
        {
            \Illuminate\Session\Store::replace($attributes);
        }
        
        /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param string|array $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function put($key, $value = null)
        {
            \Illuminate\Session\Store::put($key, $value);
        }
        
        /**
         * Get an item from the session, or store the default value.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function remember($key, $callback)
        {
            return \Illuminate\Session\Store::remember($key, $callback);
        }
        
        /**
         * Push a value onto a session array.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function push($key, $value)
        {
            \Illuminate\Session\Store::push($key, $value);
        }
        
        /**
         * Increment the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return mixed 
         * @static 
         */ 
        public static function increment($key, $amount = 1)
        {
            return \Illuminate\Session\Store::increment($key, $amount);
        }
        
        /**
         * Decrement the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return int 
         * @static 
         */ 
        public static function decrement($key, $amount = 1)
        {
            return \Illuminate\Session\Store::decrement($key, $amount);
        }
        
        /**
         * Flash a key / value pair to the session.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function flash($key, $value = true)
        {
            \Illuminate\Session\Store::flash($key, $value);
        }
        
        /**
         * Flash a key / value pair to the session for immediate use.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function now($key, $value)
        {
            \Illuminate\Session\Store::now($key, $value);
        }
        
        /**
         * Reflash all of the session flash data.
         *
         * @return void 
         * @static 
         */ 
        public static function reflash()
        {
            \Illuminate\Session\Store::reflash();
        }
        
        /**
         * Reflash a subset of the current flash data.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function keep($keys = null)
        {
            \Illuminate\Session\Store::keep($keys);
        }
        
        /**
         * Flash an input array to the session.
         *
         * @param array $value
         * @return void 
         * @static 
         */ 
        public static function flashInput($value)
        {
            \Illuminate\Session\Store::flashInput($value);
        }
        
        /**
         * Remove an item from the session, returning its value.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function remove($key)
        {
            return \Illuminate\Session\Store::remove($key);
        }
        
        /**
         * Remove one or many items from the session.
         *
         * @param string|array $keys
         * @return void 
         * @static 
         */ 
        public static function forget($keys)
        {
            \Illuminate\Session\Store::forget($keys);
        }
        
        /**
         * Remove all of the items from the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
            \Illuminate\Session\Store::flush();
        }
        
        /**
         * Flush the session data and regenerate the ID.
         *
         * @return bool 
         * @static 
         */ 
        public static function invalidate()
        {
            return \Illuminate\Session\Store::invalidate();
        }
        
        /**
         * Generate a new session identifier.
         *
         * @param bool $destroy
         * @return bool 
         * @static 
         */ 
        public static function regenerate($destroy = false)
        {
            return \Illuminate\Session\Store::regenerate($destroy);
        }
        
        /**
         * Generate a new session ID for the session.
         *
         * @param bool $destroy
         * @return bool 
         * @static 
         */ 
        public static function migrate($destroy = false)
        {
            return \Illuminate\Session\Store::migrate($destroy);
        }
        
        /**
         * Determine if the session has been started.
         *
         * @return bool 
         * @static 
         */ 
        public static function isStarted()
        {
            return \Illuminate\Session\Store::isStarted();
        }
        
        /**
         * Get the name of the session.
         *
         * @return string 
         * @static 
         */ 
        public static function getName()
        {
            return \Illuminate\Session\Store::getName();
        }
        
        /**
         * Set the name of the session.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setName($name)
        {
            \Illuminate\Session\Store::setName($name);
        }
        
        /**
         * Get the current session ID.
         *
         * @return string 
         * @static 
         */ 
        public static function getId()
        {
            return \Illuminate\Session\Store::getId();
        }
        
        /**
         * Set the session ID.
         *
         * @param string $id
         * @return void 
         * @static 
         */ 
        public static function setId($id)
        {
            \Illuminate\Session\Store::setId($id);
        }
        
        /**
         * Determine if this is a valid session ID.
         *
         * @param string $id
         * @return bool 
         * @static 
         */ 
        public static function isValidId($id)
        {
            return \Illuminate\Session\Store::isValidId($id);
        }
        
        /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function setExists($value)
        {
            \Illuminate\Session\Store::setExists($value);
        }
        
        /**
         * Get the CSRF token value.
         *
         * @return string 
         * @static 
         */ 
        public static function token()
        {
            return \Illuminate\Session\Store::token();
        }
        
        /**
         * Regenerate the CSRF token value.
         *
         * @return void 
         * @static 
         */ 
        public static function regenerateToken()
        {
            \Illuminate\Session\Store::regenerateToken();
        }
        
        /**
         * Get the previous URL from the session.
         *
         * @return string|null 
         * @static 
         */ 
        public static function previousUrl()
        {
            return \Illuminate\Session\Store::previousUrl();
        }
        
        /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
         * @return void 
         * @static 
         */ 
        public static function setPreviousUrl($url)
        {
            \Illuminate\Session\Store::setPreviousUrl($url);
        }
        
        /**
         * Get the underlying session handler implementation.
         *
         * @return \SessionHandlerInterface 
         * @static 
         */ 
        public static function getHandler()
        {
            return \Illuminate\Session\Store::getHandler();
        }
        
        /**
         * Determine if the session handler needs a request.
         *
         * @return bool 
         * @static 
         */ 
        public static function handlerNeedsRequest()
        {
            return \Illuminate\Session\Store::handlerNeedsRequest();
        }
        
        /**
         * Set the request on the handler instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void 
         * @static 
         */ 
        public static function setRequestOnHandler($request)
        {
            \Illuminate\Session\Store::setRequestOnHandler($request);
        }
         
    }

    class Storage {
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function drive($name = null)
        {
            return \Illuminate\Filesystem\FilesystemManager::drive($name);
        }
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function disk($name = null)
        {
            return \Illuminate\Filesystem\FilesystemManager::disk($name);
        }
        
        /**
         * Get a default cloud filesystem instance.
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function cloud()
        {
            return \Illuminate\Filesystem\FilesystemManager::cloud();
        }
        
        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function createLocalDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createLocalDriver($config);
        }
        
        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function createFtpDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createFtpDriver($config);
        }
        
        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */ 
        public static function createS3Driver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createS3Driver($config);
        }
        
        /**
         * Create an instance of the Rackspace driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */ 
        public static function createRackspaceDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createRackspaceDriver($config);
        }
        
        /**
         * Set the given disk instance.
         *
         * @param string $name
         * @param mixed $disk
         * @return void 
         * @static 
         */ 
        public static function set($name, $disk)
        {
            \Illuminate\Filesystem\FilesystemManager::set($name, $disk);
        }
        
        /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Filesystem\FilesystemManager::getDefaultDriver();
        }
        
        /**
         * Get the default cloud driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultCloudDriver()
        {
            return \Illuminate\Filesystem\FilesystemManager::getDefaultCloudDriver();
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Filesystem\FilesystemManager::extend($driver, $callback);
        }
        
        /**
         * Assert that the given file exists.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function assertExists($path)
        {
            \Illuminate\Filesystem\FilesystemAdapter::assertExists($path);
        }
        
        /**
         * Assert that the given file does not exist.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function assertMissing($path)
        {
            \Illuminate\Filesystem\FilesystemAdapter::assertMissing($path);
        }
        
        /**
         * Determine if a file exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function exists($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::exists($path);
        }
        
        /**
         * Get the full path for the file at the given "short" path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function path($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::path($path);
        }
        
        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function get($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::get($path);
        }
        
        /**
         * Create a streamed response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function response($path, $name = null, $headers = array(), $disposition = 'inline')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::response($path, $name, $headers, $disposition);
        }
        
        /**
         * Create a streamed download response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function download($path, $name = null, $headers = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::download($path, $name, $headers);
        }
        
        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string|resource $contents
         * @param mixed $options
         * @return bool 
         * @static 
         */ 
        public static function put($path, $contents, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::put($path, $contents, $options);
        }
        
        /**
         * Store the uploaded file on the disk.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile $file
         * @param array $options
         * @return string|false 
         * @static 
         */ 
        public static function putFile($path, $file, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::putFile($path, $file, $options);
        }
        
        /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile $file
         * @param string $name
         * @param array $options
         * @return string|false 
         * @static 
         */ 
        public static function putFileAs($path, $file, $name, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::putFileAs($path, $file, $name, $options);
        }
        
        /**
         * Get the visibility for the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function getVisibility($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getVisibility($path);
        }
        
        /**
         * Set the visibility for the given path.
         *
         * @param string $path
         * @param string $visibility
         * @return void 
         * @static 
         */ 
        public static function setVisibility($path, $visibility)
        {
            \Illuminate\Filesystem\FilesystemAdapter::setVisibility($path, $visibility);
        }
        
        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return int 
         * @static 
         */ 
        public static function prepend($path, $data, $separator = '')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::prepend($path, $data, $separator);
        }
        
        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return int 
         * @static 
         */ 
        public static function append($path, $data, $separator = '')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::append($path, $data, $separator);
        }
        
        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool 
         * @static 
         */ 
        public static function delete($paths)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::delete($paths);
        }
        
        /**
         * Copy a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool 
         * @static 
         */ 
        public static function copy($from, $to)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::copy($from, $to);
        }
        
        /**
         * Move a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool 
         * @static 
         */ 
        public static function move($from, $to)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::move($from, $to);
        }
        
        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function size($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::size($path);
        }
        
        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false 
         * @static 
         */ 
        public static function mimeType($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::mimeType($path);
        }
        
        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function lastModified($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::lastModified($path);
        }
        
        /**
         * Get the URL for the file at the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function url($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::url($path);
        }
        
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function temporaryUrl($path, $expiration, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::temporaryUrl($path, $expiration, $options);
        }
        
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param \League\Flysystem\AwsS3v3\AwsS3Adapter $adapter
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function getAwsTemporaryUrl($adapter, $path, $expiration, $options)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getAwsTemporaryUrl($adapter, $path, $expiration, $options);
        }
        
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param \League\Flysystem\Rackspace\RackspaceAdapter $adapter
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function getRackspaceTemporaryUrl($adapter, $path, $expiration, $options)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getRackspaceTemporaryUrl($adapter, $path, $expiration, $options);
        }
        
        /**
         * Get an array of all files in a directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array 
         * @static 
         */ 
        public static function files($directory = null, $recursive = false)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::files($directory, $recursive);
        }
        
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string|null $directory
         * @return array 
         * @static 
         */ 
        public static function allFiles($directory = null)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::allFiles($directory);
        }
        
        /**
         * Get all of the directories within a given directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array 
         * @static 
         */ 
        public static function directories($directory = null, $recursive = false)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::directories($directory, $recursive);
        }
        
        /**
         * Get all (recursive) of the directories within a given directory.
         *
         * @param string|null $directory
         * @return array 
         * @static 
         */ 
        public static function allDirectories($directory = null)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::allDirectories($directory);
        }
        
        /**
         * Create a directory.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function makeDirectory($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::makeDirectory($path);
        }
        
        /**
         * Recursively delete a directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function deleteDirectory($directory)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::deleteDirectory($directory);
        }
        
        /**
         * Flush the Flysystem cache.
         *
         * @return void 
         * @static 
         */ 
        public static function flushCache()
        {
            \Illuminate\Filesystem\FilesystemAdapter::flushCache();
        }
        
        /**
         * Get the Flysystem driver.
         *
         * @return \League\Flysystem\FilesystemInterface 
         * @static 
         */ 
        public static function getDriver()
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getDriver();
        }
         
    }

    class URL {
        
        /**
         * Get the full URL for the current request.
         *
         * @return string 
         * @static 
         */ 
        public static function full()
        {
            return \Illuminate\Routing\UrlGenerator::full();
        }
        
        /**
         * Get the current URL for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function current()
        {
            return \Illuminate\Routing\UrlGenerator::current();
        }
        
        /**
         * Get the URL for the previous request.
         *
         * @param mixed $fallback
         * @return string 
         * @static 
         */ 
        public static function previous($fallback = false)
        {
            return \Illuminate\Routing\UrlGenerator::previous($fallback);
        }
        
        /**
         * Generate an absolute URL to the given path.
         *
         * @param string $path
         * @param mixed $extra
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function to($path, $extra = array(), $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::to($path, $extra, $secure);
        }
        
        /**
         * Generate a secure, absolute URL to the given path.
         *
         * @param string $path
         * @param array $parameters
         * @return string 
         * @static 
         */ 
        public static function secure($path, $parameters = array())
        {
            return \Illuminate\Routing\UrlGenerator::secure($path, $parameters);
        }
        
        /**
         * Generate the URL to an application asset.
         *
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function asset($path, $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::asset($path, $secure);
        }
        
        /**
         * Generate the URL to a secure asset.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function secureAsset($path)
        {
            return \Illuminate\Routing\UrlGenerator::secureAsset($path);
        }
        
        /**
         * Generate the URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param string $root
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function assetFrom($root, $path, $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::assetFrom($root, $path, $secure);
        }
        
        /**
         * Get the default scheme for a raw URL.
         *
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function formatScheme($secure)
        {
            return \Illuminate\Routing\UrlGenerator::formatScheme($secure);
        }
        
        /**
         * Get the URL to a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function route($name, $parameters = array(), $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
        }
        
        /**
         * Get the URL to a controller action.
         *
         * @param string $action
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function action($action, $parameters = array(), $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
        }
        
        /**
         * Format the array of URL parameters.
         *
         * @param mixed|array $parameters
         * @return array 
         * @static 
         */ 
        public static function formatParameters($parameters)
        {
            return \Illuminate\Routing\UrlGenerator::formatParameters($parameters);
        }
        
        /**
         * Get the base URL for the request.
         *
         * @param string $scheme
         * @param string $root
         * @return string 
         * @static 
         */ 
        public static function formatRoot($scheme, $root = null)
        {
            return \Illuminate\Routing\UrlGenerator::formatRoot($scheme, $root);
        }
        
        /**
         * Format the given URL segments into a single URL.
         *
         * @param string $root
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function format($root, $path)
        {
            return \Illuminate\Routing\UrlGenerator::format($root, $path);
        }
        
        /**
         * Determine if the given path is a valid URL.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isValidUrl($path)
        {
            return \Illuminate\Routing\UrlGenerator::isValidUrl($path);
        }
        
        /**
         * Set the default named parameters used by the URL generator.
         *
         * @param array $defaults
         * @return void 
         * @static 
         */ 
        public static function defaults($defaults)
        {
            \Illuminate\Routing\UrlGenerator::defaults($defaults);
        }
        
        /**
         * Get the default named parameters used by the URL generator.
         *
         * @return array 
         * @static 
         */ 
        public static function getDefaultParameters()
        {
            return \Illuminate\Routing\UrlGenerator::getDefaultParameters();
        }
        
        /**
         * Force the scheme for URLs.
         *
         * @param string $schema
         * @return void 
         * @static 
         */ 
        public static function forceScheme($schema)
        {
            \Illuminate\Routing\UrlGenerator::forceScheme($schema);
        }
        
        /**
         * Set the forced root URL.
         *
         * @param string $root
         * @return void 
         * @static 
         */ 
        public static function forceRootUrl($root)
        {
            \Illuminate\Routing\UrlGenerator::forceRootUrl($root);
        }
        
        /**
         * Set a callback to be used to format the host of generated URLs.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function formatHostUsing($callback)
        {
            return \Illuminate\Routing\UrlGenerator::formatHostUsing($callback);
        }
        
        /**
         * Set a callback to be used to format the path of generated URLs.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function formatPathUsing($callback)
        {
            return \Illuminate\Routing\UrlGenerator::formatPathUsing($callback);
        }
        
        /**
         * Get the path formatter being used by the URL generator.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function pathFormatter()
        {
            return \Illuminate\Routing\UrlGenerator::pathFormatter();
        }
        
        /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function getRequest()
        {
            return \Illuminate\Routing\UrlGenerator::getRequest();
        }
        
        /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void 
         * @static 
         */ 
        public static function setRequest($request)
        {
            \Illuminate\Routing\UrlGenerator::setRequest($request);
        }
        
        /**
         * Set the route collection.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return $this 
         * @static 
         */ 
        public static function setRoutes($routes)
        {
            return \Illuminate\Routing\UrlGenerator::setRoutes($routes);
        }
        
        /**
         * Set the session resolver for the generator.
         *
         * @param callable $sessionResolver
         * @return $this 
         * @static 
         */ 
        public static function setSessionResolver($sessionResolver)
        {
            return \Illuminate\Routing\UrlGenerator::setSessionResolver($sessionResolver);
        }
        
        /**
         * Set the root controller namespace.
         *
         * @param string $rootNamespace
         * @return $this 
         * @static 
         */ 
        public static function setRootControllerNamespace($rootNamespace)
        {
            return \Illuminate\Routing\UrlGenerator::setRootControllerNamespace($rootNamespace);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\UrlGenerator::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Routing\UrlGenerator::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\UrlGenerator::hasMacro($name);
        }
         
    }

    class Validator {
        
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return \Illuminate\Validation\Validator 
         * @static 
         */ 
        public static function make($data, $rules, $messages = array(), $customAttributes = array())
        {
            return \Illuminate\Validation\Factory::make($data, $rules, $messages, $customAttributes);
        }
        
        /**
         * Validate the given data against the provided rules.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return void 
         * @throws \Illuminate\Validation\ValidationException
         * @static 
         */ 
        public static function validate($data, $rules, $messages = array(), $customAttributes = array())
        {
            \Illuminate\Validation\Factory::validate($data, $rules, $messages, $customAttributes);
        }
        
        /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
        public static function extend($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extend($rule, $extension, $message);
        }
        
        /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
        public static function extendImplicit($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extendImplicit($rule, $extension, $message);
        }
        
        /**
         * Register a custom dependent validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
        public static function extendDependent($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extendDependent($rule, $extension, $message);
        }
        
        /**
         * Register a custom validator message replacer.
         *
         * @param string $rule
         * @param \Closure|string $replacer
         * @return void 
         * @static 
         */ 
        public static function replacer($rule, $replacer)
        {
            \Illuminate\Validation\Factory::replacer($rule, $replacer);
        }
        
        /**
         * Set the Validator instance resolver.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function resolver($resolver)
        {
            \Illuminate\Validation\Factory::resolver($resolver);
        }
        
        /**
         * Get the Translator implementation.
         *
         * @return \Illuminate\Contracts\Translation\Translator 
         * @static 
         */ 
        public static function getTranslator()
        {
            return \Illuminate\Validation\Factory::getTranslator();
        }
        
        /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface 
         * @static 
         */ 
        public static function getPresenceVerifier()
        {
            return \Illuminate\Validation\Factory::getPresenceVerifier();
        }
        
        /**
         * Set the Presence Verifier implementation.
         *
         * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
         * @return void 
         * @static 
         */ 
        public static function setPresenceVerifier($presenceVerifier)
        {
            \Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
        }
         
    }

    class View {
        
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View|string|\View 
         * @author Asif Iqbal <webwizo@gmail.com>
         * @since 2.1
         * @static 
         */ 
        public static function make($view, $data = array(), $mergeData = array())
        {
            return \Botble\Shortcode\View\Factory::make($view, $data, $mergeData);
        }
        
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $path
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */ 
        public static function file($path, $data = array(), $mergeData = array())
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::file($path, $data, $mergeData);
        }
        
        /**
         * Get the first view that actually exists from the given list.
         *
         * @param array $views
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */ 
        public static function first($views, $data = array(), $mergeData = array())
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::first($views, $data, $mergeData);
        }
        
        /**
         * Get the rendered content of the view based on a given condition.
         *
         * @param bool $condition
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @return string 
         * @static 
         */ 
        public static function renderWhen($condition, $view, $data = array(), $mergeData = array())
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::renderWhen($condition, $view, $data, $mergeData);
        }
        
        /**
         * Get the rendered contents of a partial from a loop.
         *
         * @param string $view
         * @param array $data
         * @param string $iterator
         * @param string $empty
         * @return string 
         * @static 
         */ 
        public static function renderEach($view, $data, $iterator, $empty = 'raw|')
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::renderEach($view, $data, $iterator, $empty);
        }
        
        /**
         * Determine if a given view exists.
         *
         * @param string $view
         * @return bool 
         * @static 
         */ 
        public static function exists($view)
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::exists($view);
        }
        
        /**
         * Get the appropriate view engine for the given path.
         *
         * @param string $path
         * @return \Illuminate\Contracts\View\Engine 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function getEngineFromPath($path)
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::getEngineFromPath($path);
        }
        
        /**
         * Add a piece of shared data to the environment.
         *
         * @param array|string $key
         * @param mixed $value
         * @return mixed 
         * @static 
         */ 
        public static function share($key, $value = null)
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::share($key, $value);
        }
        
        /**
         * Increment the rendering counter.
         *
         * @return void 
         * @static 
         */ 
        public static function incrementRender()
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::incrementRender();
        }
        
        /**
         * Decrement the rendering counter.
         *
         * @return void 
         * @static 
         */ 
        public static function decrementRender()
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::decrementRender();
        }
        
        /**
         * Check if there are no active render operations.
         *
         * @return bool 
         * @static 
         */ 
        public static function doneRendering()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::doneRendering();
        }
        
        /**
         * Add a location to the array of view locations.
         *
         * @param string $location
         * @return void 
         * @static 
         */ 
        public static function addLocation($location)
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::addLocation($location);
        }
        
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return $this 
         * @static 
         */ 
        public static function addNamespace($namespace, $hints)
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::addNamespace($namespace, $hints);
        }
        
        /**
         * Prepend a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return $this 
         * @static 
         */ 
        public static function prependNamespace($namespace, $hints)
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::prependNamespace($namespace, $hints);
        }
        
        /**
         * Replace the namespace hints for the given namespace.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return $this 
         * @static 
         */ 
        public static function replaceNamespace($namespace, $hints)
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::replaceNamespace($namespace, $hints);
        }
        
        /**
         * Register a valid view extension and its engine.
         *
         * @param string $extension
         * @param string $engine
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function addExtension($extension, $engine, $resolver = null)
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::addExtension($extension, $engine, $resolver);
        }
        
        /**
         * Flush all of the factory state like sections and stacks.
         *
         * @return void 
         * @static 
         */ 
        public static function flushState()
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::flushState();
        }
        
        /**
         * Flush all of the section contents if done rendering.
         *
         * @return void 
         * @static 
         */ 
        public static function flushStateIfDoneRendering()
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::flushStateIfDoneRendering();
        }
        
        /**
         * Get the extension to engine bindings.
         *
         * @return array 
         * @static 
         */ 
        public static function getExtensions()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::getExtensions();
        }
        
        /**
         * Get the engine resolver instance.
         *
         * @return \Illuminate\View\Engines\EngineResolver 
         * @static 
         */ 
        public static function getEngineResolver()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::getEngineResolver();
        }
        
        /**
         * Get the view finder instance.
         *
         * @return \Illuminate\View\ViewFinderInterface 
         * @static 
         */ 
        public static function getFinder()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::getFinder();
        }
        
        /**
         * Set the view finder instance.
         *
         * @param \Illuminate\View\ViewFinderInterface $finder
         * @return void 
         * @static 
         */ 
        public static function setFinder($finder)
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::setFinder($finder);
        }
        
        /**
         * Flush the cache of views located by the finder.
         *
         * @return void 
         * @static 
         */ 
        public static function flushFinderCache()
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::flushFinderCache();
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getDispatcher()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::getDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setDispatcher($events)
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::setDispatcher($events);
        }
        
        /**
         * Get the IoC container instance.
         *
         * @return \Illuminate\Contracts\Container\Container 
         * @static 
         */ 
        public static function getContainer()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::getContainer();
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void 
         * @static 
         */ 
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::setContainer($container);
        }
        
        /**
         * Get an item from the shared data.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function shared($key, $default = null)
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::shared($key, $default);
        }
        
        /**
         * Get all of the shared data for the environment.
         *
         * @return array 
         * @static 
         */ 
        public static function getShared()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::getShared();
        }
        
        /**
         * Start a component rendering process.
         *
         * @param string $name
         * @param array $data
         * @return void 
         * @static 
         */ 
        public static function startComponent($name, $data = array())
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::startComponent($name, $data);
        }
        
        /**
         * Render the current component.
         *
         * @return string 
         * @static 
         */ 
        public static function renderComponent()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::renderComponent();
        }
        
        /**
         * Start the slot rendering process.
         *
         * @param string $name
         * @param string|null $content
         * @return void 
         * @static 
         */ 
        public static function slot($name, $content = null)
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::slot($name, $content);
        }
        
        /**
         * Save the slot content for rendering.
         *
         * @return void 
         * @static 
         */ 
        public static function endSlot()
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::endSlot();
        }
        
        /**
         * Register a view creator event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array 
         * @static 
         */ 
        public static function creator($views, $callback)
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::creator($views, $callback);
        }
        
        /**
         * Register multiple view composers via an array.
         *
         * @param array $composers
         * @return array 
         * @static 
         */ 
        public static function composers($composers)
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::composers($composers);
        }
        
        /**
         * Register a view composer event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array 
         * @static 
         */ 
        public static function composer($views, $callback)
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::composer($views, $callback);
        }
        
        /**
         * Call the composer for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void 
         * @static 
         */ 
        public static function callComposer($view)
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::callComposer($view);
        }
        
        /**
         * Call the creator for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void 
         * @static 
         */ 
        public static function callCreator($view)
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::callCreator($view);
        }
        
        /**
         * Start injecting content into a section.
         *
         * @param string $section
         * @param string|null $content
         * @return void 
         * @static 
         */ 
        public static function startSection($section, $content = null)
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::startSection($section, $content);
        }
        
        /**
         * Inject inline content into a section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */ 
        public static function inject($section, $content)
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::inject($section, $content);
        }
        
        /**
         * Stop injecting content into a section and return its contents.
         *
         * @return string 
         * @static 
         */ 
        public static function yieldSection()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::yieldSection();
        }
        
        /**
         * Stop injecting content into a section.
         *
         * @param bool $overwrite
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function stopSection($overwrite = false)
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::stopSection($overwrite);
        }
        
        /**
         * Stop injecting content into a section and append it.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function appendSection()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::appendSection();
        }
        
        /**
         * Get the string contents of a section.
         *
         * @param string $section
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function yieldContent($section, $default = '')
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::yieldContent($section, $default);
        }
        
        /**
         * Get the parent placeholder for the current request.
         *
         * @param string $section
         * @return string 
         * @static 
         */ 
        public static function parentPlaceholder($section = '')
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::parentPlaceholder($section);
        }
        
        /**
         * Check if section exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasSection($name)
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::hasSection($name);
        }
        
        /**
         * Get the contents of a section.
         *
         * @param string $name
         * @param string $default
         * @return mixed 
         * @static 
         */ 
        public static function getSection($name, $default = null)
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::getSection($name, $default);
        }
        
        /**
         * Get the entire array of sections.
         *
         * @return array 
         * @static 
         */ 
        public static function getSections()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::getSections();
        }
        
        /**
         * Flush all of the sections.
         *
         * @return void 
         * @static 
         */ 
        public static function flushSections()
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::flushSections();
        }
        
        /**
         * Add new loop to the stack.
         *
         * @param \Countable|array $data
         * @return void 
         * @static 
         */ 
        public static function addLoop($data)
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::addLoop($data);
        }
        
        /**
         * Increment the top loop's indices.
         *
         * @return void 
         * @static 
         */ 
        public static function incrementLoopIndices()
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::incrementLoopIndices();
        }
        
        /**
         * Pop a loop from the top of the loop stack.
         *
         * @return void 
         * @static 
         */ 
        public static function popLoop()
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::popLoop();
        }
        
        /**
         * Get an instance of the last loop in the stack.
         *
         * @return \stdClass|null 
         * @static 
         */ 
        public static function getLastLoop()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::getLastLoop();
        }
        
        /**
         * Get the entire loop stack.
         *
         * @return array 
         * @static 
         */ 
        public static function getLoopStack()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::getLoopStack();
        }
        
        /**
         * Start injecting content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */ 
        public static function startPush($section, $content = '')
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::startPush($section, $content);
        }
        
        /**
         * Stop injecting content into a push section.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function stopPush()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::stopPush();
        }
        
        /**
         * Start prepending content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */ 
        public static function startPrepend($section, $content = '')
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::startPrepend($section, $content);
        }
        
        /**
         * Stop prepending content into a push section.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function stopPrepend()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::stopPrepend();
        }
        
        /**
         * Get the string contents of a push section.
         *
         * @param string $section
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function yieldPushContent($section, $default = '')
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::yieldPushContent($section, $default);
        }
        
        /**
         * Flush all of the stacks.
         *
         * @return void 
         * @static 
         */ 
        public static function flushStacks()
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::flushStacks();
        }
        
        /**
         * Start a translation block.
         *
         * @param array $replacements
         * @return void 
         * @static 
         */ 
        public static function startTranslation($replacements = array())
        {
            //Method inherited from \Illuminate\View\Factory            
            \Botble\Shortcode\View\Factory::startTranslation($replacements);
        }
        
        /**
         * Render the current translation.
         *
         * @return string 
         * @static 
         */ 
        public static function renderTranslation()
        {
            //Method inherited from \Illuminate\View\Factory            
            return \Botble\Shortcode\View\Factory::renderTranslation();
        }
         
    }
 
}

namespace Carbon { 

    class Carbon {
         
    }
 
}

namespace DaveJamesMiller\Breadcrumbs\Facades { 

    class Breadcrumbs {
        
        /**
         * Register a breadcrumb-generating callback for a page.
         *
         * @param string $name The name of the page.
         * @param callable $callback The callback, which should accept a Generator instance as the first parameter and may
         *                           accept additional parameters.
         * @return void 
         * @throws DuplicateBreadcrumbException If the given name has already been used.
         * @static 
         */ 
        public static function register($name, $callback)
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::register($name, $callback);
        }
        
        /**
         * Register a closure to call before generating breadcrumbs for the current page.
         * 
         * For example, this can be used to always prepend the homepage without needing to manually add it to each page.
         *
         * @param callback $callback The callback, which should accept a Generator instance as the first and only parameter.
         * @return void 
         * @static 
         */ 
        public static function before($callback)
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::before($callback);
        }
        
        /**
         * Register a closure to call after generating breadcrumbs for the current page.
         * 
         * For example, this can be used to append the current page number when using pagination.
         *
         * @param callback $callback The callback, which should accept a Generator instance as the first and only parameter.
         * @return void 
         * @static 
         */ 
        public static function after($callback)
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::after($callback);
        }
        
        /**
         * Check if a breadcrumb with the given name exists.
         * 
         * If no name is given, defaults to the current route name.
         *
         * @param string|null $name The page name.
         * @return bool Whether there is a registered callback with that name.
         * @static 
         */ 
        public static function exists($name = null)
        {
            return \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::exists($name);
        }
        
        /**
         * Generate a set of breadcrumbs for a page.
         *
         * @param string|null $name The name of the current page.
         * @param mixed $params The parameters to pass to the closure for the current page.
         * @return \DaveJamesMiller\Breadcrumbs\Collection The generated breadcrumbs.
         * @throws UnnamedRouteException if no name is given and the current route doesn't have an associated name.
         * @throws InvalidBreadcrumbException if the name is (or any ancestor names are) not registered.
         * @static 
         */ 
        public static function generate($name = null, $params = null)
        {
            return \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::generate($name, $params);
        }
        
        /**
         * Render breadcrumbs for a page with the specified view.
         *
         * @param string $view The name of the view to render.
         * @param string|null $name The name of the current page.
         * @param mixed $params The parameters to pass to the closure for the current page.
         * @return \DaveJamesMiller\Breadcrumbs\HtmlString The generated HTML.
         * @throws InvalidBreadcrumbException if the name is (or any ancestor names are) not registered.
         * @throws UnnamedRouteException if no name is given and the current route doesn't have an associated name.
         * @throws ViewNotSetException if no view has been set.
         * @static 
         */ 
        public static function view($view, $name = null, $params = null)
        {
            return \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::view($view, $name, $params);
        }
        
        /**
         * Render breadcrumbs for a page with the default view.
         *
         * @param string|null $name The name of the current page.
         * @param mixed $params The parameters to pass to the closure for the current page.
         * @return \DaveJamesMiller\Breadcrumbs\HtmlString The generated HTML.
         * @throws InvalidBreadcrumbException if the name is (or any ancestor names are) not registered.
         * @throws UnnamedRouteException if no name is given and the current route doesn't have an associated name.
         * @throws ViewNotSetException if no view has been set.
         * @static 
         */ 
        public static function render($name = null, $params = null)
        {
            return \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::render($name, $params);
        }
        
        /**
         * Get the last breadcrumb for the current page.
         * 
         * Optionally pass a
         *
         * @return \stdClass|null The breadcrumb for the current page.
         * @throws UnnamedRouteException if the current route doesn't have an associated name.
         * @throws InvalidBreadcrumbException if the name is (or any ancestor names are) not registered.
         * @static 
         */ 
        public static function current()
        {
            return \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::current();
        }
        
        /**
         * Set the current route name and parameters to use when calling render() or generate() with no parameters.
         *
         * @param string $name The name of the current page.
         * @param mixed $params The parameters to pass to the closure for the current page.
         * @return void 
         * @static 
         */ 
        public static function setCurrentRoute($name, $params = null)
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::setCurrentRoute($name, $params);
        }
        
        /**
         * Clear the previously set route name and parameters to use when calling render() or generate() with no parameters.
         * 
         * Next time it will revert to the default behaviour of using the current route from Laravel.
         *
         * @return void 
         * @static 
         */ 
        public static function clearCurrentRoute()
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::clearCurrentRoute();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::hasMacro($name);
        }
         
    }
 
}

namespace Intervention\Image\Facades { 

    class Image {
        
        /**
         * Overrides configuration settings
         *
         * @param array $config
         * @static 
         */ 
        public static function configure($config = array())
        {
            return \Intervention\Image\ImageManager::configure($config);
        }
        
        /**
         * Initiates an Image instance from different input types
         *
         * @param mixed $data
         * @return \Intervention\Image\Image 
         * @static 
         */ 
        public static function make($data)
        {
            return \Intervention\Image\ImageManager::make($data);
        }
        
        /**
         * Creates an empty image canvas
         *
         * @param integer $width
         * @param integer $height
         * @param mixed $background
         * @return \Intervention\Image\Image 
         * @static 
         */ 
        public static function canvas($width, $height, $background = null)
        {
            return \Intervention\Image\ImageManager::canvas($width, $height, $background);
        }
        
        /**
         * Create new cached image and run callback
         * (requires additional package intervention/imagecache)
         *
         * @param \Closure $callback
         * @param integer $lifetime
         * @param boolean $returnObj
         * @return \Image 
         * @static 
         */ 
        public static function cache($callback, $lifetime = null, $returnObj = false)
        {
            return \Intervention\Image\ImageManager::cache($callback, $lifetime, $returnObj);
        }
         
    }
 
}

namespace Laravel\Socialite\Facades { 

    class Socialite {
        
        /**
         * Get a driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function with($driver)
        {
            return \Laravel\Socialite\SocialiteManager::with($driver);
        }
        
        /**
         * Build an OAuth 2 provider instance.
         *
         * @param string $provider
         * @param array $config
         * @return \Laravel\Socialite\Two\AbstractProvider 
         * @static 
         */ 
        public static function buildProvider($provider, $config)
        {
            return \Laravel\Socialite\SocialiteManager::buildProvider($provider, $config);
        }
        
        /**
         * Format the server configuration.
         *
         * @param array $config
         * @return array 
         * @static 
         */ 
        public static function formatConfig($config)
        {
            return \Laravel\Socialite\SocialiteManager::formatConfig($config);
        }
        
        /**
         * Get the default driver name.
         *
         * @throws \InvalidArgumentException
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Laravel\Socialite\SocialiteManager::getDefaultDriver();
        }
        
        /**
         * Get a driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Laravel\Socialite\SocialiteManager::driver($driver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Laravel\Socialite\SocialiteManager::extend($driver, $callback);
        }
        
        /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */ 
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Laravel\Socialite\SocialiteManager::getDrivers();
        }
         
    }
 
}

namespace PragmaRX\Countries { 

    class Facade {
        
        /**
         * Get the countries repository.
         *
         * @return \PragmaRX\Countries\CountriesRepository 
         * @static 
         */ 
        public static function getRepository()
        {
            return \PragmaRX\Countries\Service::getRepository();
        }
        
        /**
         * Get all currencies.
         *
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function currencies()
        {
            return \PragmaRX\Countries\Service::currencies();
        }
         
    }
 
}

namespace Proengsoft\JsValidation\Facades { 

    class JsValidatorFacade {
        
        /**
         * Creates JsValidator instance based on rules and message arrays.
         *
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @param null|string $selector
         * @return \Proengsoft\JsValidation\JavascriptValidator 
         * @static 
         */ 
        public static function make($rules, $messages = array(), $customAttributes = array(), $selector = null)
        {
            return \Proengsoft\JsValidation\JsValidatorFactory::make($rules, $messages, $customAttributes, $selector);
        }
        
        /**
         * Creates JsValidator instance based on FormRequest.
         *
         * @param $formRequest
         * @param null $selector
         * @return \Proengsoft\JsValidation\JavascriptValidator 
         * @throws FormRequestArgumentException
         * @static 
         */ 
        public static function formRequest($formRequest, $selector = null)
        {
            return \Proengsoft\JsValidation\JsValidatorFactory::formRequest($formRequest, $selector);
        }
        
        /**
         * Creates JsValidator instance based on Validator.
         *
         * @param \Illuminate\Validation\Validator $validator
         * @param string|null $selector
         * @return \Proengsoft\JsValidation\JavascriptValidator 
         * @static 
         */ 
        public static function validator($validator, $selector = null)
        {
            return \Proengsoft\JsValidation\JsValidatorFactory::validator($validator, $selector);
        }
         
    }
 
}

namespace SammyK\LaravelFacebookSdk { 

    class FacebookFacade {
        
        /**
         * 
         *
         * @param array $config
         * @return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk 
         * @static 
         */ 
        public static function newInstance($config)
        {
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::newInstance($config);
        }
        
        /**
         * Generate an OAuth 2.0 authorization URL for authentication.
         *
         * @param array $scope
         * @param string $callback_url
         * @return string 
         * @static 
         */ 
        public static function getLoginUrl($scope = array(), $callback_url = '')
        {
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getLoginUrl($scope, $callback_url);
        }
        
        /**
         * Generate a re-request authorization URL.
         *
         * @param array $scope
         * @param string $callback_url
         * @return string 
         * @static 
         */ 
        public static function getReRequestUrl($scope, $callback_url = '')
        {
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getReRequestUrl($scope, $callback_url);
        }
        
        /**
         * Generate a re-authentication authorization URL.
         *
         * @param array $scope
         * @param string $callback_url
         * @return string 
         * @static 
         */ 
        public static function getReAuthenticationUrl($scope = array(), $callback_url = '')
        {
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getReAuthenticationUrl($scope, $callback_url);
        }
        
        /**
         * Get an access token from a redirect.
         *
         * @param string $callback_url
         * @return \Facebook\Authentication\AccessToken|null 
         * @static 
         */ 
        public static function getAccessTokenFromRedirect($callback_url = '')
        {
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getAccessTokenFromRedirect($callback_url);
        }
        
        /**
         * Returns the FacebookApp entity.
         *
         * @return \Facebook\FacebookApp 
         * @static 
         */ 
        public static function getApp()
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getApp();
        }
        
        /**
         * Returns the FacebookClient service.
         *
         * @return \Facebook\FacebookClient 
         * @static 
         */ 
        public static function getClient()
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getClient();
        }
        
        /**
         * Returns the OAuth 2.0 client service.
         *
         * @return \Facebook\OAuth2Client 
         * @static 
         */ 
        public static function getOAuth2Client()
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getOAuth2Client();
        }
        
        /**
         * Returns the last response returned from Graph.
         *
         * @return \Facebook\FacebookResponse|\Facebook\FacebookBatchResponse|null 
         * @static 
         */ 
        public static function getLastResponse()
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getLastResponse();
        }
        
        /**
         * Returns the URL detection handler.
         *
         * @return \Facebook\UrlDetectionInterface 
         * @static 
         */ 
        public static function getUrlDetectionHandler()
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getUrlDetectionHandler();
        }
        
        /**
         * Returns the default AccessToken entity.
         *
         * @return \Facebook\AccessToken|null 
         * @static 
         */ 
        public static function getDefaultAccessToken()
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getDefaultAccessToken();
        }
        
        /**
         * Sets the default access token to use with requests.
         *
         * @param \Facebook\AccessToken|string $accessToken The access token to save.
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function setDefaultAccessToken($accessToken)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::setDefaultAccessToken($accessToken);
        }
        
        /**
         * Returns the default Graph version.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultGraphVersion()
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getDefaultGraphVersion();
        }
        
        /**
         * Returns the redirect login helper.
         *
         * @return \Facebook\FacebookRedirectLoginHelper 
         * @static 
         */ 
        public static function getRedirectLoginHelper()
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getRedirectLoginHelper();
        }
        
        /**
         * Returns the JavaScript helper.
         *
         * @return \Facebook\FacebookJavaScriptHelper 
         * @static 
         */ 
        public static function getJavaScriptHelper()
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getJavaScriptHelper();
        }
        
        /**
         * Returns the canvas helper.
         *
         * @return \Facebook\FacebookCanvasHelper 
         * @static 
         */ 
        public static function getCanvasHelper()
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getCanvasHelper();
        }
        
        /**
         * Returns the page tab helper.
         *
         * @return \Facebook\FacebookPageTabHelper 
         * @static 
         */ 
        public static function getPageTabHelper()
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getPageTabHelper();
        }
        
        /**
         * Sends a GET request to Graph and returns the result.
         *
         * @param string $endpoint
         * @param \Facebook\AccessToken|string|null $accessToken
         * @param string|null $eTag
         * @param string|null $graphVersion
         * @return \Facebook\FacebookResponse 
         * @throws FacebookSDKException
         * @static 
         */ 
        public static function get($endpoint, $accessToken = null, $eTag = null, $graphVersion = null)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::get($endpoint, $accessToken, $eTag, $graphVersion);
        }
        
        /**
         * Sends a POST request to Graph and returns the result.
         *
         * @param string $endpoint
         * @param array $params
         * @param \Facebook\AccessToken|string|null $accessToken
         * @param string|null $eTag
         * @param string|null $graphVersion
         * @return \Facebook\FacebookResponse 
         * @throws FacebookSDKException
         * @static 
         */ 
        public static function post($endpoint, $params = array(), $accessToken = null, $eTag = null, $graphVersion = null)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::post($endpoint, $params, $accessToken, $eTag, $graphVersion);
        }
        
        /**
         * Sends a DELETE request to Graph and returns the result.
         *
         * @param string $endpoint
         * @param array $params
         * @param \Facebook\AccessToken|string|null $accessToken
         * @param string|null $eTag
         * @param string|null $graphVersion
         * @return \Facebook\FacebookResponse 
         * @throws FacebookSDKException
         * @static 
         */ 
        public static function delete($endpoint, $params = array(), $accessToken = null, $eTag = null, $graphVersion = null)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::delete($endpoint, $params, $accessToken, $eTag, $graphVersion);
        }
        
        /**
         * Sends a request to Graph for the next page of results.
         *
         * @param \Facebook\GraphEdge $graphEdge The GraphEdge to paginate over.
         * @return \Facebook\GraphEdge|null 
         * @throws FacebookSDKException
         * @static 
         */ 
        public static function next($graphEdge)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::next($graphEdge);
        }
        
        /**
         * Sends a request to Graph for the previous page of results.
         *
         * @param \Facebook\GraphEdge $graphEdge The GraphEdge to paginate over.
         * @return \Facebook\GraphEdge|null 
         * @throws FacebookSDKException
         * @static 
         */ 
        public static function previous($graphEdge)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::previous($graphEdge);
        }
        
        /**
         * Sends a request to Graph for the next page of results.
         *
         * @param \Facebook\GraphEdge $graphEdge The GraphEdge to paginate over.
         * @param string $direction The direction of the pagination: next|previous.
         * @return \Facebook\GraphEdge|null 
         * @throws FacebookSDKException
         * @static 
         */ 
        public static function getPaginationResults($graphEdge, $direction)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::getPaginationResults($graphEdge, $direction);
        }
        
        /**
         * Sends a request to Graph and returns the result.
         *
         * @param string $method
         * @param string $endpoint
         * @param array $params
         * @param \Facebook\AccessToken|string|null $accessToken
         * @param string|null $eTag
         * @param string|null $graphVersion
         * @return \Facebook\FacebookResponse 
         * @throws FacebookSDKException
         * @static 
         */ 
        public static function sendRequest($method, $endpoint, $params = array(), $accessToken = null, $eTag = null, $graphVersion = null)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::sendRequest($method, $endpoint, $params, $accessToken, $eTag, $graphVersion);
        }
        
        /**
         * Sends a batched request to Graph and returns the result.
         *
         * @param array $requests
         * @param \Facebook\AccessToken|string|null $accessToken
         * @param string|null $graphVersion
         * @return \Facebook\FacebookBatchResponse 
         * @throws FacebookSDKException
         * @static 
         */ 
        public static function sendBatchRequest($requests, $accessToken = null, $graphVersion = null)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::sendBatchRequest($requests, $accessToken, $graphVersion);
        }
        
        /**
         * Instantiates an empty FacebookBatchRequest entity.
         *
         * @param \Facebook\AccessToken|string|null $accessToken The top-level access token. Requests with no access token
         *                                               will fallback to this.
         * @param string|null $graphVersion The Graph API version to use.
         * @return \Facebook\FacebookBatchRequest 
         * @static 
         */ 
        public static function newBatchRequest($accessToken = null, $graphVersion = null)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::newBatchRequest($accessToken, $graphVersion);
        }
        
        /**
         * Instantiates a new FacebookRequest entity.
         *
         * @param string $method
         * @param string $endpoint
         * @param array $params
         * @param \Facebook\AccessToken|string|null $accessToken
         * @param string|null $eTag
         * @param string|null $graphVersion
         * @return \Facebook\FacebookRequest 
         * @throws FacebookSDKException
         * @static 
         */ 
        public static function request($method, $endpoint, $params = array(), $accessToken = null, $eTag = null, $graphVersion = null)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::request($method, $endpoint, $params, $accessToken, $eTag, $graphVersion);
        }
        
        /**
         * Factory to create FacebookFile's.
         *
         * @param string $pathToFile
         * @return \Facebook\FacebookFile 
         * @throws FacebookSDKException
         * @static 
         */ 
        public static function fileToUpload($pathToFile)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::fileToUpload($pathToFile);
        }
        
        /**
         * Factory to create FacebookVideo's.
         *
         * @param string $pathToFile
         * @return \Facebook\FacebookVideo 
         * @throws FacebookSDKException
         * @static 
         */ 
        public static function videoToUpload($pathToFile)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::videoToUpload($pathToFile);
        }
        
        /**
         * Upload a video in chunks.
         *
         * @param int $target The id of the target node before the /videos edge.
         * @param string $pathToFile The full path to the file.
         * @param array $metadata The metadata associated with the video file.
         * @param string|null $accessToken The access token.
         * @param int $maxTransferTries The max times to retry a failed upload chunk.
         * @param string|null $graphVersion The Graph API version to use.
         * @return array 
         * @throws FacebookSDKException
         * @static 
         */ 
        public static function uploadVideo($target, $pathToFile, $metadata = array(), $accessToken = null, $maxTransferTries = 5, $graphVersion = null)
        {
            //Method inherited from \Facebook\Facebook            
            return \SammyK\LaravelFacebookSdk\LaravelFacebookSdk::uploadVideo($target, $pathToFile, $metadata, $accessToken, $maxTransferTries, $graphVersion);
        }
         
    }
 
}

namespace Collective\Html { 

    class FormFacade {
        
        /**
         * Open up a new HTML form.
         *
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function open($options = array())
        {
            return \Collective\Html\FormBuilder::open($options);
        }
        
        /**
         * Create a new model based form builder.
         *
         * @param mixed $model
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function model($model, $options = array())
        {
            return \Collective\Html\FormBuilder::model($model, $options);
        }
        
        /**
         * Set the model instance on the form builder.
         *
         * @param mixed $model
         * @return void 
         * @static 
         */ 
        public static function setModel($model)
        {
            \Collective\Html\FormBuilder::setModel($model);
        }
        
        /**
         * Close the current form.
         *
         * @return string 
         * @static 
         */ 
        public static function close()
        {
            return \Collective\Html\FormBuilder::close();
        }
        
        /**
         * Generate a hidden field with the current CSRF token.
         *
         * @return string 
         * @static 
         */ 
        public static function token()
        {
            return \Collective\Html\FormBuilder::token();
        }
        
        /**
         * Create a form label element.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @param bool $escape_html
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function label($name, $value = null, $options = array(), $escape_html = true)
        {
            return \Collective\Html\FormBuilder::label($name, $value, $options, $escape_html);
        }
        
        /**
         * Create a form input field.
         *
         * @param string $type
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function input($type, $name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::input($type, $name, $value, $options);
        }
        
        /**
         * Create a text input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function text($name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::text($name, $value, $options);
        }
        
        /**
         * Create a password input field.
         *
         * @param string $name
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function password($name, $options = array())
        {
            return \Collective\Html\FormBuilder::password($name, $options);
        }
        
        /**
         * Create a hidden input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function hidden($name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::hidden($name, $value, $options);
        }
        
        /**
         * Create a search input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function search($name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::search($name, $value, $options);
        }
        
        /**
         * Create an e-mail input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function email($name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::email($name, $value, $options);
        }
        
        /**
         * Create a tel input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function tel($name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::tel($name, $value, $options);
        }
        
        /**
         * Create a number input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function number($name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::number($name, $value, $options);
        }
        
        /**
         * Create a date input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function date($name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::date($name, $value, $options);
        }
        
        /**
         * Create a datetime input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function datetime($name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::datetime($name, $value, $options);
        }
        
        /**
         * Create a datetime-local input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function datetimeLocal($name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::datetimeLocal($name, $value, $options);
        }
        
        /**
         * Create a time input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function time($name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::time($name, $value, $options);
        }
        
        /**
         * Create a url input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function url($name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::url($name, $value, $options);
        }
        
        /**
         * Create a file input field.
         *
         * @param string $name
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function file($name, $options = array())
        {
            return \Collective\Html\FormBuilder::file($name, $options);
        }
        
        /**
         * Create a textarea input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function textarea($name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::textarea($name, $value, $options);
        }
        
        /**
         * Create a select box field.
         *
         * @param string $name
         * @param array $list
         * @param string $selected
         * @param array $selectAttributes
         * @param array $optionsAttributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function select($name, $list = array(), $selected = null, $selectAttributes = array(), $optionsAttributes = array())
        {
            return \Collective\Html\FormBuilder::select($name, $list, $selected, $selectAttributes, $optionsAttributes);
        }
        
        /**
         * Create a select range field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function selectRange($name, $begin, $end, $selected = null, $options = array())
        {
            return \Collective\Html\FormBuilder::selectRange($name, $begin, $end, $selected, $options);
        }
        
        /**
         * Create a select year field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return mixed 
         * @static 
         */ 
        public static function selectYear()
        {
            return \Collective\Html\FormBuilder::selectYear();
        }
        
        /**
         * Create a select month field.
         *
         * @param string $name
         * @param string $selected
         * @param array $options
         * @param string $format
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function selectMonth($name, $selected = null, $options = array(), $format = '%B')
        {
            return \Collective\Html\FormBuilder::selectMonth($name, $selected, $options, $format);
        }
        
        /**
         * Get the select option for the given value.
         *
         * @param string $display
         * @param string $value
         * @param string $selected
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function getSelectOption($display, $value, $selected, $attributes = array())
        {
            return \Collective\Html\FormBuilder::getSelectOption($display, $value, $selected, $attributes);
        }
        
        /**
         * Create a checkbox input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function checkbox($name, $value = 1, $checked = null, $options = array())
        {
            return \Collective\Html\FormBuilder::checkbox($name, $value, $checked, $options);
        }
        
        /**
         * Create a radio button input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function radio($name, $value = null, $checked = null, $options = array())
        {
            return \Collective\Html\FormBuilder::radio($name, $value, $checked, $options);
        }
        
        /**
         * Create a HTML reset input element.
         *
         * @param string $value
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function reset($value, $attributes = array())
        {
            return \Collective\Html\FormBuilder::reset($value, $attributes);
        }
        
        /**
         * Create a HTML image input element.
         *
         * @param string $url
         * @param string $name
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function image($url, $name = null, $attributes = array())
        {
            return \Collective\Html\FormBuilder::image($url, $name, $attributes);
        }
        
        /**
         * Create a color input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function color($name, $value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::color($name, $value, $options);
        }
        
        /**
         * Create a submit button element.
         *
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function submit($value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::submit($value, $options);
        }
        
        /**
         * Create a button element.
         *
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function button($value = null, $options = array())
        {
            return \Collective\Html\FormBuilder::button($value, $options);
        }
        
        /**
         * Get the ID attribute for a field name.
         *
         * @param string $name
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function getIdAttribute($name, $attributes)
        {
            return \Collective\Html\FormBuilder::getIdAttribute($name, $attributes);
        }
        
        /**
         * Get the value that should be assigned to the field.
         *
         * @param string $name
         * @param string $value
         * @return mixed 
         * @static 
         */ 
        public static function getValueAttribute($name, $value = null)
        {
            return \Collective\Html\FormBuilder::getValueAttribute($name, $value);
        }
        
        /**
         * Get a value from the session's old input.
         *
         * @param string $name
         * @return mixed 
         * @static 
         */ 
        public static function old($name)
        {
            return \Collective\Html\FormBuilder::old($name);
        }
        
        /**
         * Determine if the old input is empty.
         *
         * @return bool 
         * @static 
         */ 
        public static function oldInputIsEmpty()
        {
            return \Collective\Html\FormBuilder::oldInputIsEmpty();
        }
        
        /**
         * Get the session store implementation.
         *
         * @return \Illuminate\Contracts\Session\Session $session
         * @static 
         */ 
        public static function getSessionStore()
        {
            return \Collective\Html\FormBuilder::getSessionStore();
        }
        
        /**
         * Set the session store implementation.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @return $this 
         * @static 
         */ 
        public static function setSessionStore($session)
        {
            return \Collective\Html\FormBuilder::setSessionStore($session);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Collective\Html\FormBuilder::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Collective\Html\FormBuilder::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Collective\Html\FormBuilder::hasMacro($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Collective\Html\FormBuilder::macroCall($method, $parameters);
        }
        
        /**
         * Register a custom component.
         *
         * @param $name
         * @param $view
         * @param array $signature
         * @return void 
         * @static 
         */ 
        public static function component($name, $view, $signature)
        {
            \Collective\Html\FormBuilder::component($name, $view, $signature);
        }
        
        /**
         * Check if a component is registered.
         *
         * @param $name
         * @return bool 
         * @static 
         */ 
        public static function hasComponent($name)
        {
            return \Collective\Html\FormBuilder::hasComponent($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return \Illuminate\Contracts\View\View|mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function componentCall($method, $parameters)
        {
            return \Collective\Html\FormBuilder::componentCall($method, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function captcha($name = null, $attributes = array())
        {
            return \Collective\Html\FormBuilder::captcha($name, $attributes);
        }
         
    }

    class HtmlFacade {
        
        /**
         * Convert an HTML string to entities.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function entities($value)
        {
            return \Collective\Html\HtmlBuilder::entities($value);
        }
        
        /**
         * Convert entities to HTML characters.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function decode($value)
        {
            return \Collective\Html\HtmlBuilder::decode($value);
        }
        
        /**
         * Generate a link to a JavaScript file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function script($url, $attributes = array(), $secure = null)
        {
            return \Collective\Html\HtmlBuilder::script($url, $attributes, $secure);
        }
        
        /**
         * Generate a link to a CSS file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function style($url, $attributes = array(), $secure = null)
        {
            return \Collective\Html\HtmlBuilder::style($url, $attributes, $secure);
        }
        
        /**
         * Generate an HTML image element.
         *
         * @param string $url
         * @param string $alt
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function image($url, $alt = null, $attributes = array(), $secure = null)
        {
            return \Collective\Html\HtmlBuilder::image($url, $alt, $attributes, $secure);
        }
        
        /**
         * Generate a link to a Favicon file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function favicon($url, $attributes = array(), $secure = null)
        {
            return \Collective\Html\HtmlBuilder::favicon($url, $attributes, $secure);
        }
        
        /**
         * Generate a HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function link($url, $title = null, $attributes = array(), $secure = null, $escape = true)
        {
            return \Collective\Html\HtmlBuilder::link($url, $title, $attributes, $secure, $escape);
        }
        
        /**
         * Generate a HTTPS HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function secureLink($url, $title = null, $attributes = array())
        {
            return \Collective\Html\HtmlBuilder::secureLink($url, $title, $attributes);
        }
        
        /**
         * Generate a HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function linkAsset($url, $title = null, $attributes = array(), $secure = null)
        {
            return \Collective\Html\HtmlBuilder::linkAsset($url, $title, $attributes, $secure);
        }
        
        /**
         * Generate a HTTPS HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function linkSecureAsset($url, $title = null, $attributes = array())
        {
            return \Collective\Html\HtmlBuilder::linkSecureAsset($url, $title, $attributes);
        }
        
        /**
         * Generate a HTML link to a named route.
         *
         * @param string $name
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function linkRoute($name, $title = null, $parameters = array(), $attributes = array())
        {
            return \Collective\Html\HtmlBuilder::linkRoute($name, $title, $parameters, $attributes);
        }
        
        /**
         * Generate a HTML link to a controller action.
         *
         * @param string $action
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function linkAction($action, $title = null, $parameters = array(), $attributes = array())
        {
            return \Collective\Html\HtmlBuilder::linkAction($action, $title, $parameters, $attributes);
        }
        
        /**
         * Generate a HTML link to an email address.
         *
         * @param string $email
         * @param string $title
         * @param array $attributes
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function mailto($email, $title = null, $attributes = array(), $escape = true)
        {
            return \Collective\Html\HtmlBuilder::mailto($email, $title, $attributes, $escape);
        }
        
        /**
         * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
         *
         * @param string $email
         * @return string 
         * @static 
         */ 
        public static function email($email)
        {
            return \Collective\Html\HtmlBuilder::email($email);
        }
        
        /**
         * Generates non-breaking space entities based on number supplied.
         *
         * @param int $num
         * @return string 
         * @static 
         */ 
        public static function nbsp($num = 1)
        {
            return \Collective\Html\HtmlBuilder::nbsp($num);
        }
        
        /**
         * Generate an ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString|string 
         * @static 
         */ 
        public static function ol($list, $attributes = array())
        {
            return \Collective\Html\HtmlBuilder::ol($list, $attributes);
        }
        
        /**
         * Generate an un-ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString|string 
         * @static 
         */ 
        public static function ul($list, $attributes = array())
        {
            return \Collective\Html\HtmlBuilder::ul($list, $attributes);
        }
        
        /**
         * Generate a description list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function dl($list, $attributes = array())
        {
            return \Collective\Html\HtmlBuilder::dl($list, $attributes);
        }
        
        /**
         * Build an HTML attribute string from an array.
         *
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function attributes($attributes)
        {
            return \Collective\Html\HtmlBuilder::attributes($attributes);
        }
        
        /**
         * Obfuscate a string to prevent spam-bots from sniffing it.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function obfuscate($value)
        {
            return \Collective\Html\HtmlBuilder::obfuscate($value);
        }
        
        /**
         * Generate a meta tag.
         *
         * @param string $name
         * @param string $content
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function meta($name, $content, $attributes = array())
        {
            return \Collective\Html\HtmlBuilder::meta($name, $content, $attributes);
        }
        
        /**
         * Generate an html tag.
         *
         * @param string $tag
         * @param mixed $content
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function tag($tag, $content, $attributes = array())
        {
            return \Collective\Html\HtmlBuilder::tag($tag, $content, $attributes);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Collective\Html\HtmlBuilder::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Collective\Html\HtmlBuilder::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Collective\Html\HtmlBuilder::hasMacro($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Collective\Html\HtmlBuilder::macroCall($method, $parameters);
        }
        
        /**
         * Register a custom component.
         *
         * @param $name
         * @param $view
         * @param array $signature
         * @return void 
         * @static 
         */ 
        public static function component($name, $view, $signature)
        {
            \Collective\Html\HtmlBuilder::component($name, $view, $signature);
        }
        
        /**
         * Check if a component is registered.
         *
         * @param $name
         * @return bool 
         * @static 
         */ 
        public static function hasComponent($name)
        {
            return \Collective\Html\HtmlBuilder::hasComponent($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return \Illuminate\Contracts\View\View|mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function componentCall($method, $parameters)
        {
            return \Collective\Html\HtmlBuilder::componentCall($method, $parameters);
        }
         
    }
 
}

namespace Maatwebsite\Excel\Facades { 

    class Excel {
        
        /**
         * Create a new file
         *
         * @param $filename
         * @param callable|null $callback
         * @return \Maatwebsite\Excel\LaravelExcelWriter 
         * @static 
         */ 
        public static function create($filename, $callback = null)
        {
            return \Maatwebsite\Excel\Excel::create($filename, $callback);
        }
        
        /**
         * Load an existing file
         *
         * @param string $file The file we want to load
         * @param callback|null $callback
         * @param string|null $encoding
         * @param bool $noBasePath
         * @param callback|null $callbackConfigReader
         * @return \Maatwebsite\Excel\LaravelExcelReader 
         * @static 
         */ 
        public static function load($file, $callback = null, $encoding = null, $noBasePath = false, $callbackConfigReader = null)
        {
            return \Maatwebsite\Excel\Excel::load($file, $callback, $encoding, $noBasePath, $callbackConfigReader);
        }
        
        /**
         * Set select sheets
         *
         * @param $sheets
         * @return \Maatwebsite\Excel\LaravelExcelReader 
         * @static 
         */ 
        public static function selectSheets($sheets = array())
        {
            return \Maatwebsite\Excel\Excel::selectSheets($sheets);
        }
        
        /**
         * Select sheets by index
         *
         * @param array $sheets
         * @return $this 
         * @static 
         */ 
        public static function selectSheetsByIndex($sheets = array())
        {
            return \Maatwebsite\Excel\Excel::selectSheetsByIndex($sheets);
        }
        
        /**
         * Batch import
         *
         * @param $files
         * @param callback $callback
         * @return \PHPExcel 
         * @static 
         */ 
        public static function batch($files, $callback)
        {
            return \Maatwebsite\Excel\Excel::batch($files, $callback);
        }
        
        /**
         * Create a new file and share a view
         *
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @return \Maatwebsite\Excel\LaravelExcelWriter 
         * @static 
         */ 
        public static function shareView($view, $data = array(), $mergeData = array())
        {
            return \Maatwebsite\Excel\Excel::shareView($view, $data, $mergeData);
        }
        
        /**
         * Create a new file and load a view
         *
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @return \Maatwebsite\Excel\LaravelExcelWriter 
         * @static 
         */ 
        public static function loadView($view, $data = array(), $mergeData = array())
        {
            return \Maatwebsite\Excel\Excel::loadView($view, $data, $mergeData);
        }
        
        /**
         * Set filters
         *
         * @param array $filters
         * @return \Excel 
         * @static 
         */ 
        public static function registerFilters($filters = array())
        {
            return \Maatwebsite\Excel\Excel::registerFilters($filters);
        }
        
        /**
         * Enable certain filters
         *
         * @param string|array $filter
         * @param bool|false|string $class
         * @return \Excel 
         * @static 
         */ 
        public static function filter($filter, $class = false)
        {
            return \Maatwebsite\Excel\Excel::filter($filter, $class);
        }
        
        /**
         * Get register, enabled (or both) filters
         *
         * @param string|boolean $key [description]
         * @return array 
         * @static 
         */ 
        public static function getFilters($key = false)
        {
            return \Maatwebsite\Excel\Excel::getFilters($key);
        }
         
    }
 
}

namespace Yajra\DataTables\Facades { 

    class DataTables {
        
        /**
         * Make a DataTable instance from source.
         * 
         * Alias of make for backward compatibility.
         *
         * @param mixed $source
         * @return mixed 
         * @throws \Exception
         * @static 
         */ 
        public static function of($source)
        {
            return \Yajra\DataTables\DataTables::of($source);
        }
        
        /**
         * Make a DataTable instance from source.
         *
         * @param mixed $source
         * @return mixed 
         * @throws \Exception
         * @static 
         */ 
        public static function make($source)
        {
            return \Yajra\DataTables\DataTables::make($source);
        }
        
        /**
         * Get request object.
         *
         * @return \Yajra\DataTables\Utilities\Request 
         * @static 
         */ 
        public static function getRequest()
        {
            return \Yajra\DataTables\DataTables::getRequest();
        }
        
        /**
         * Get config instance.
         *
         * @return \Yajra\DataTables\Utilities\Config 
         * @static 
         */ 
        public static function getConfig()
        {
            return \Yajra\DataTables\DataTables::getConfig();
        }
        
        /**
         * 
         *
         * @deprecated Please use query() instead, this method will be removed in a next version.
         * @param $builder
         * @return \Yajra\DataTables\QueryDataTable 
         * @static 
         */ 
        public static function queryBuilder($builder)
        {
            return \Yajra\DataTables\DataTables::queryBuilder($builder);
        }
        
        /**
         * DataTables using Query.
         *
         * @param \Illuminate\Database\Query\Builder|mixed $builder
         * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\QueryDataTable 
         * @static 
         */ 
        public static function query($builder)
        {
            return \Yajra\DataTables\DataTables::query($builder);
        }
        
        /**
         * DataTables using Eloquent Builder.
         *
         * @param \Illuminate\Database\Eloquent\Builder|mixed $builder
         * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\EloquentDataTable 
         * @static 
         */ 
        public static function eloquent($builder)
        {
            return \Yajra\DataTables\DataTables::eloquent($builder);
        }
        
        /**
         * DataTables using Collection.
         *
         * @param \Illuminate\Support\Collection|array $collection
         * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\CollectionDataTable 
         * @static 
         */ 
        public static function collection($collection)
        {
            return \Yajra\DataTables\DataTables::collection($collection);
        }
        
        /**
         * Get html builder instance.
         *
         * @return \Yajra\DataTables\Html\Builder 
         * @throws \Exception
         * @static 
         */ 
        public static function getHtmlBuilder()
        {
            return \Yajra\DataTables\DataTables::getHtmlBuilder();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Yajra\DataTables\DataTables::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Yajra\DataTables\DataTables::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Yajra\DataTables\DataTables::hasMacro($name);
        }
         
    }
 
}

namespace Botble\Assets\Facades { 

    class AssetsFacade {
        
        /**
         * Add Javascript to current module
         *
         * @param array $assets
         * @return $this 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function addJavascript($assets)
        {
            return \Botble\Assets\Assets::addJavascript($assets);
        }
        
        /**
         * Add Css to current module
         *
         * @param array $assets
         * @return $this 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function addStylesheets($assets)
        {
            return \Botble\Assets\Assets::addStylesheets($assets);
        }
        
        /**
         * 
         *
         * @param $assets
         * @return $this 
         * @author Tedozi Manson
         * @static 
         */ 
        public static function addStylesheetsDirectly($assets)
        {
            return \Botble\Assets\Assets::addStylesheetsDirectly($assets);
        }
        
        /**
         * 
         *
         * @param $assets
         * @param string $location
         * @return $this 
         * @author Tedozi Manson
         * @static 
         */ 
        public static function addJavascriptDirectly($assets, $location = 'bottom')
        {
            return \Botble\Assets\Assets::addJavascriptDirectly($assets, $location);
        }
        
        /**
         * Add Module to current module
         *
         * @param array $modules
         * @return \Botble\Assets\$this; 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function addAppModule($modules)
        {
            return \Botble\Assets\Assets::addAppModule($modules);
        }
        
        /**
         * Remove Css to current module
         *
         * @param array $assets
         * @return \Botble\Assets\$this; 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function removeStylesheets($assets)
        {
            return \Botble\Assets\Assets::removeStylesheets($assets);
        }
        
        /**
         * Add Javascript to current module
         *
         * @param array $assets
         * @return \Botble\Assets\$this; 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function removeJavascript($assets)
        {
            return \Botble\Assets\Assets::removeJavascript($assets);
        }
        
        /**
         * Get All Javascript in current module
         *
         * @param string $location : top or bottom
         * @param boolean $version : show version?
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getJavascript($location = null, $version = true)
        {
            return \Botble\Assets\Assets::getJavascript($location, $version);
        }
        
        /**
         * Get All CSS in current module
         *
         * @param array $lastModules : append last CSS to current module
         * @param boolean $version : show version?
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getStylesheets($lastModules = array(), $version = true)
        {
            return \Botble\Assets\Assets::getStylesheets($lastModules, $version);
        }
        
        /**
         * Get all modules in current module
         *
         * @param boolean $version : show version?
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getAppModules($version = true)
        {
            return \Botble\Assets\Assets::getAppModules($version);
        }
        
        /**
         * Get all admin themes
         *
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getThemes()
        {
            return \Botble\Assets\Assets::getThemes();
        }
        
        /**
         * 
         *
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getAdminLocales()
        {
            return \Botble\Assets\Assets::getAdminLocales();
        }
         
    }
 
}

namespace Botble\Setting\Facades { 

    class SettingFacade {
        
        /**
         * Get a specific key from the settings data.
         *
         * @param string|array $key
         * @param mixed $default Optional default value.
         * @return mixed 
         * @author Andreas Lutro <anlutro@gmail.com>
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            return \Botble\Setting\Setting::get($key, $default);
        }
        
        /**
         * Determine if a key exists in the settings data.
         *
         * @param string $key
         * @return boolean 
         * @author Andreas Lutro <anlutro@gmail.com>
         * @static 
         */ 
        public static function has($key)
        {
            return \Botble\Setting\Setting::has($key);
        }
        
        /**
         * Set a specific key to a value in the settings data.
         *
         * @param string|array $key Key string or associative array of key => value
         * @param mixed $value Optional only if the first argument is an array
         * @author Andreas Lutro <anlutro@gmail.com>
         * @static 
         */ 
        public static function set($key, $value = null)
        {
            return \Botble\Setting\Setting::set($key, $value);
        }
        
        /**
         * Unset all keys in the settings data.
         *
         * @return void 
         * @author Andreas Lutro <anlutro@gmail.com>
         * @static 
         */ 
        public static function forgetAll()
        {
            \Botble\Setting\Setting::forgetAll();
        }
        
        /**
         * Get all settings data.
         *
         * @return array 
         * @author Andreas Lutro <anlutro@gmail.com>
         * @static 
         */ 
        public static function all()
        {
            return \Botble\Setting\Setting::all();
        }
        
        /**
         * Save any changes done to the settings data.
         *
         * @return void 
         * @author Andreas Lutro <anlutro@gmail.com>
         * @static 
         */ 
        public static function save()
        {
            \Botble\Setting\Setting::save();
        }
        
        /**
         * Set extra columns to be added to the rows.
         *
         * @param array $columns
         * @author Andreas Lutro <anlutro@gmail.com>
         * @static 
         */ 
        public static function setExtraColumns($columns)
        {
            return \Botble\Setting\Setting::setExtraColumns($columns);
        }
        
        /**
         * 
         *
         * @param $key
         * @author Andreas Lutro <anlutro@gmail.com>
         * @static 
         */ 
        public static function forget($key)
        {
            return \Botble\Setting\Setting::forget($key);
        }
        
        /**
         * 
         *
         * @param $data
         * @return array Parse data coming from the database.
         * @author Andreas Lutro <anlutro@gmail.com>
         * @static 
         */ 
        public static function parseReadData($data)
        {
            return \Botble\Setting\Setting::parseReadData($data);
        }
        
        /**
         * 
         *
         * @param $setting
         * @return mixed|string 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function render($setting)
        {
            return \Botble\Setting\Setting::render($setting);
        }
         
    }
 
}

namespace Botble\Base\Facades { 

    class MetaBoxFacade {
        
        /**
         * 
         *
         * @param $id
         * @param $title
         * @param $callback
         * @param null $screen
         * @param string $context
         * @param string $priority
         * @param null $callback_args
         * @author Sang Nguyen
         * @static 
         */ 
        public static function addMetaBox($id, $title, $callback, $screen = null, $context = 'advanced', $priority = 'default', $callback_args = null)
        {
            return \Botble\Base\MetaBox::addMetaBox($id, $title, $callback, $screen, $context, $priority, $callback_args);
        }
        
        /**
         * Meta-Box template function
         *
         * @param string $screen Screen identifier
         * @param string $context box context
         * @param mixed $object gets passed to the box callback function as first parameter
         * @return int number of meta_boxes
         * @author Sang Nguyen
         * @static 
         */ 
        public static function doMetaBoxes($screen, $context, $object = null)
        {
            return \Botble\Base\MetaBox::doMetaBoxes($screen, $context, $object);
        }
        
        /**
         * Remove a meta box from an edit form.
         *
         * @param string $id String for use in the 'id' attribute of tags.
         * @param string|object $screen The screen on which to show the box (post, page, link).
         * @param string $context The context within the page where the boxes should show ('normal', 'advanced').
         * @author Sang Nguyen
         * @static 
         */ 
        public static function removeMetaBox($id, $screen, $context)
        {
            return \Botble\Base\MetaBox::removeMetaBox($id, $screen, $context);
        }
        
        /**
         * 
         *
         * @param $content_id
         * @param $key
         * @param $value
         * @param $reference
         * @param $options
         * @throws Exception
         * @return boolean 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function saveMetaBoxData($content_id, $key, $value, $reference, $options = null)
        {
            return \Botble\Base\MetaBox::saveMetaBoxData($content_id, $key, $value, $reference, $options);
        }
        
        /**
         * 
         *
         * @param $content_id
         * @param $key
         * @param $reference
         * @param boolean $single
         * @param array $select
         * @return mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getMetaData($content_id, $key, $reference, $single = false, $select = array())
        {
            return \Botble\Base\MetaBox::getMetaData($content_id, $key, $reference, $single, $select);
        }
        
        /**
         * 
         *
         * @param $content_id
         * @param $key
         * @param $reference
         * @param array $select
         * @return mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getMeta($content_id, $key, $reference, $select = array())
        {
            return \Botble\Base\MetaBox::getMeta($content_id, $key, $reference, $select);
        }
        
        /**
         * 
         *
         * @param $content_id
         * @param $key
         * @param $reference
         * @return mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function deleteMetaData($content_id, $key, $reference)
        {
            return \Botble\Base\MetaBox::deleteMetaData($content_id, $key, $reference);
        }
         
    }

    class ActionFacade {
        
        /**
         * Filters a value
         *
         * @param string $action Name of action
         * @param array $args Arguments passed to the filter
         * @author Tor Morten Jensen <tormorten@tormorten.no>
         * @static 
         */ 
        public static function fire($action, $args)
        {
            return \Botble\Base\Supports\Action::fire($action, $args);
        }
        
        /**
         * Adds a listener
         *
         * @param string $hook Hook name
         * @param mixed $callback Function to execute
         * @param integer $priority Priority of the action
         * @param integer $arguments Number of arguments to accept
         * @author Tor Morten Jensen <tormorten@tormorten.no>
         * @static 
         */ 
        public static function listen($hook, $callback, $priority = 20, $arguments = 1)
        {
            //Method inherited from \Botble\Base\Supports\ActionHookEvent            
            return \Botble\Base\Supports\Action::listen($hook, $callback, $priority, $arguments);
        }
        
        /**
         * Gets a sorted list of all listeners
         *
         * @return array 
         * @author Tor Morten Jensen <tormorten@tormorten.no>
         * @static 
         */ 
        public static function getListeners()
        {
            //Method inherited from \Botble\Base\Supports\ActionHookEvent            
            return \Botble\Base\Supports\Action::getListeners();
        }
         
    }

    class FilterFacade {
        
        /**
         * Filters a value
         *
         * @param string $action Name of filter
         * @param array $args Arguments passed to the filter
         * @return string Always returns the value
         * @author Tor Morten Jensen <tormorten@tormorten.no>
         * @static 
         */ 
        public static function fire($action, $args)
        {
            return \Botble\Base\Supports\Filter::fire($action, $args);
        }
        
        /**
         * Adds a listener
         *
         * @param string $hook Hook name
         * @param mixed $callback Function to execute
         * @param integer $priority Priority of the action
         * @param integer $arguments Number of arguments to accept
         * @author Tor Morten Jensen <tormorten@tormorten.no>
         * @static 
         */ 
        public static function listen($hook, $callback, $priority = 20, $arguments = 1)
        {
            //Method inherited from \Botble\Base\Supports\ActionHookEvent            
            return \Botble\Base\Supports\Filter::listen($hook, $callback, $priority, $arguments);
        }
        
        /**
         * Gets a sorted list of all listeners
         *
         * @return array 
         * @author Tor Morten Jensen <tormorten@tormorten.no>
         * @static 
         */ 
        public static function getListeners()
        {
            //Method inherited from \Botble\Base\Supports\ActionHookEvent            
            return \Botble\Base\Supports\Filter::getListeners();
        }
         
    }

    class EmailHandlerFacade {
        
        /**
         * 
         *
         * @param $view
         * @author Sang Nguyen
         * @static 
         */ 
        public static function setEmailTemplate($view)
        {
            return \Botble\Base\Supports\EmailHandler::setEmailTemplate($view);
        }
        
        /**
         * 
         *
         * @param $content
         * @param $title
         * @param $args
         * @author Sang Nguyen
         * @static 
         */ 
        public static function send($content, $title, $args)
        {
            return \Botble\Base\Supports\EmailHandler::send($content, $title, $args);
        }
        
        /**
         * Sends an email to the developer about the exception.
         *
         * @param \Exception $exception
         * @return void 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function sendErrorException($exception)
        {
            \Botble\Base\Supports\EmailHandler::sendErrorException($exception);
        }
         
    }

    class AdminBarFacade {
        
        /**
         * 
         *
         * @param bool $is_display
         * @static 
         */ 
        public static function setDisplay($is_display = true)
        {
            return \Botble\Base\Supports\AdminBar::setDisplay($is_display);
        }
        
        /**
         * 
         *
         * @return bool 
         * @static 
         */ 
        public static function getDisplay()
        {
            return \Botble\Base\Supports\AdminBar::getDisplay();
        }
        
        /**
         * 
         *
         * @return array 
         * @static 
         */ 
        public static function getGroups()
        {
            return \Botble\Base\Supports\AdminBar::getGroups();
        }
        
        /**
         * 
         *
         * @return array 
         * @static 
         */ 
        public static function getLinksNoGroup()
        {
            return \Botble\Base\Supports\AdminBar::getLinksNoGroup();
        }
        
        /**
         * 
         *
         * @param $slug
         * @param $title
         * @param string $link
         * @return $this 
         * @static 
         */ 
        public static function registerGroup($slug, $title, $link = 'javascript:;')
        {
            return \Botble\Base\Supports\AdminBar::registerGroup($slug, $title, $link);
        }
        
        /**
         * 
         *
         * @param $title
         * @param $url
         * @param null $group
         * @return $this 
         * @static 
         */ 
        public static function registerLink($title, $url, $group = null)
        {
            return \Botble\Base\Supports\AdminBar::registerLink($title, $url, $group);
        }
        
        /**
         * 
         *
         * @return string 
         * @static 
         */ 
        public static function render()
        {
            return \Botble\Base\Supports\AdminBar::render();
        }
         
    }

    class PageTitleFacade {
        
        /**
         * 
         *
         * @param $title
         * @author Sang Nguyen
         * @static 
         */ 
        public static function setTitle($title)
        {
            return \Botble\Base\Supports\PageTitle::setTitle($title);
        }
        
        /**
         * 
         *
         * @param bool $full
         * @return string 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getTitle($full = true)
        {
            return \Botble\Base\Supports\PageTitle::getTitle($full);
        }
         
    }

    class AdminBreadcrumbFacade {
        
        /**
         * 
         *
         * @return string 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function render()
        {
            return \Botble\Base\Supports\AdminBreadcrumb::render();
        }
         
    }

    class DashboardMenuFacade {
        
        /**
         * 
         *
         * @param \Botble\Base\Supports\User $user
         * @author Sang Nguyen
         * @static 
         */ 
        public static function init($user)
        {
            return \Botble\Base\Supports\DashboardMenu::init($user);
        }
        
        /**
         * Add link
         *
         * @param array $options
         * @return $this 
         * @static 
         */ 
        public static function registerItem($options)
        {
            return \Botble\Base\Supports\DashboardMenu::registerItem($options);
        }
        
        /**
         * 
         *
         * @param array|string $id
         * @return $this 
         * @static 
         */ 
        public static function removeItem($id)
        {
            return \Botble\Base\Supports\DashboardMenu::removeItem($id);
        }
        
        /**
         * Get children items
         *
         * @param null $id
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function getChildren($id = null)
        {
            return \Botble\Base\Supports\DashboardMenu::getChildren($id);
        }
        
        /**
         * Rearrange links
         *
         * @return \Illuminate\Support\Collection 
         * @throws \Exception
         * @static 
         */ 
        public static function getAll()
        {
            return \Botble\Base\Supports\DashboardMenu::getAll();
        }
         
    }

    class SiteMapManagerFacade {
        
        /**
         * 
         *
         * @param $url
         * @param $date
         * @param string $priority
         * @param string $sequence
         * @return $this 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function add($url, $date, $priority = '1.0', $sequence = 'daily')
        {
            return \Botble\Base\Supports\SiteMapManager::add($url, $date, $priority, $sequence);
        }
        
        /**
         * 
         *
         * @param string $type
         * @return mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function render($type = 'xml')
        {
            return \Botble\Base\Supports\SiteMapManager::render($type);
        }
         
    }

    class JsonFeedManagerFacade {
        
        /**
         * 
         *
         * @param array $item
         * @return $this 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function addItem($key, $item)
        {
            return \Botble\Base\Supports\JsonFeedManager::addItem($key, $item);
        }
        
        /**
         * 
         *
         * @return mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getItems()
        {
            return \Botble\Base\Supports\JsonFeedManager::getItems();
        }
        
        /**
         * 
         *
         * @return mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function render()
        {
            return \Botble\Base\Supports\JsonFeedManager::render();
        }
         
    }
 
}

namespace Botble\Gallery\Facades { 

    class GalleryFacade {
        
        /**
         * 
         *
         * @param $module
         * @author Sang Nguyen
         * @static 
         */ 
        public static function registerModule($screen)
        {
            return \Botble\Gallery\Gallery::registerModule($screen);
        }
        
        /**
         * 
         *
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getScreens()
        {
            return \Botble\Gallery\Gallery::getScreens();
        }
        
        /**
         * 
         *
         * @param string $screen
         * @param \Illuminate\Http\Request $request
         * @param \Eloquent|false $data
         * @static 
         */ 
        public static function saveGallery($screen, $request, $data)
        {
            return \Botble\Gallery\Gallery::saveGallery($screen, $request, $data);
        }
        
        /**
         * 
         *
         * @param string $screen
         * @param \Eloquent|false $data
         * @static 
         */ 
        public static function deleteGallery($screen, $data)
        {
            return \Botble\Gallery\Gallery::deleteGallery($screen, $data);
        }
        
        /**
         * 
         *
         * @return $this 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function registerAssets()
        {
            return \Botble\Gallery\Gallery::registerAssets();
        }
         
    }
 
}

namespace Botble\Language\Facades { 

    class LanguageFacade {
        
        /**
         * Return an array of all supported Locales
         *
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getSupportedLocales()
        {
            return \Botble\Language\Language::getSupportedLocales();
        }
        
        /**
         * Set and return supported locales
         *
         * @param array $locales Locales that the App supports
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function setSupportedLocales($locales)
        {
            return \Botble\Language\Language::setSupportedLocales($locales);
        }
        
        /**
         * 
         *
         * @param array $select
         * @return mixed 
         * @author Sang Nguyen
         * @since 2.0
         * @static 
         */ 
        public static function getActiveLanguage($select = array())
        {
            return \Botble\Language\Language::getActiveLanguage($select);
        }
        
        /**
         * Returns default locale
         *
         * @return string 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getDefaultLocale()
        {
            return \Botble\Language\Language::getDefaultLocale();
        }
        
        /**
         * 
         *
         * @return void 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function setDefaultLocale()
        {
            \Botble\Language\Language::setDefaultLocale();
        }
        
        /**
         * 
         *
         * @author Sang Nguyen
         * @since 2.0
         * @static 
         */ 
        public static function screenUsingMultiLanguage()
        {
            return \Botble\Language\Language::screenUsingMultiLanguage();
        }
        
        /**
         * 
         *
         * @return string 
         * @author Sang Nguyen
         * @since 2.1
         * @static 
         */ 
        public static function getHiddenLanguageText()
        {
            return \Botble\Language\Language::getHiddenLanguageText();
        }
        
        /**
         * 
         *
         * @param $id
         * @param $unique_key
         * @return mixed 
         * @author Sang Nguyen
         * @since 2.0
         * @static 
         */ 
        public static function getRelatedLanguageItem($id, $unique_key)
        {
            return \Botble\Language\Language::getRelatedLanguageItem($id, $unique_key);
        }
        
        /**
         * Set and return current locale
         *
         * @param string $locale Locale to set the App to (optional)
         * @return string Returns locale (if route has any) or null (if route does not have a locale)
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function setLocale($locale = null)
        {
            return \Botble\Language\Language::setLocale($locale);
        }
        
        /**
         * Returns the translation key for a given path
         *
         * @return boolean Returns value of hideDefaultLocaleInURL in config.
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function hideDefaultLocaleInURL()
        {
            return \Botble\Language\Language::hideDefaultLocaleInURL();
        }
        
        /**
         * Returns current language
         *
         * @return string current language
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function getCurrentLocale()
        {
            return \Botble\Language\Language::getCurrentLocale();
        }
        
        /**
         * Returns an URL adapted to $locale or current locale
         *
         * @param string $url URL to adapt. If not passed, the current url would be taken.
         * @param string|boolean $locale Locale to adapt, false to remove locale
         * @return string URL translated
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function localizeURL($url = null, $locale = null)
        {
            return \Botble\Language\Language::localizeURL($url, $locale);
        }
        
        /**
         * Returns an URL adapted to $locale
         *
         * @param string|boolean $locale Locale to adapt, false to remove locale
         * @param string|false $url URL to adapt in the current language. If not passed, the current url would be taken.
         * @param array $attributes Attributes to add to the route, if empty, the system would try to extract them from the url.
         * @return string|false URL translated, False if url does not exist
         * @author Marc Cámara <mcamara88@gmail.com>
         * @modified Sang Nguyen
         * @static 
         */ 
        public static function getLocalizedURL($locale = null, $url = null, $attributes = array())
        {
            return \Botble\Language\Language::getLocalizedURL($locale, $url, $attributes);
        }
        
        /**
         * Returns an URL adapted to the route name and the locale given
         *
         * @param string|boolean $locale Locale to adapt
         * @param string $transKeyName Translation key name of the url to adapt
         * @param array $attributes Attributes for the route (only needed if transKeyName needs them)
         * @return string|false URL translated
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function getURLFromRouteNameTranslated($locale, $transKeyName, $attributes = array())
        {
            return \Botble\Language\Language::getURLFromRouteNameTranslated($locale, $transKeyName, $attributes);
        }
        
        /**
         * Create an url from the uri
         *
         * @param string $uri Uri
         * @return string Url for the given uri
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function createUrlFromUri($uri)
        {
            return \Botble\Language\Language::createUrlFromUri($uri);
        }
        
        /**
         * It returns an URL without locale (if it has it)
         * Convenience function wrapping getLocalizedURL(false)
         *
         * @param string|false $url URL to clean, if false, current url would be taken
         * @return string URL with no locale in path
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function getNonLocalizedURL($url = null)
        {
            return \Botble\Language\Language::getNonLocalizedURL($url);
        }
        
        /**
         * Returns current locale name
         *
         * @return string current locale name
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function getCurrentLocaleName()
        {
            return \Botble\Language\Language::getCurrentLocaleName();
        }
        
        /**
         * Returns current text direction
         *
         * @return string current locale name
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getCurrentLocaleRTL()
        {
            return \Botble\Language\Language::getCurrentLocaleRTL();
        }
        
        /**
         * Returns current locale code
         *
         * @return string current locale code
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function getCurrentLocaleCode()
        {
            return \Botble\Language\Language::getCurrentLocaleCode();
        }
        
        /**
         * Returns current locale code
         *
         * @return string current locale code
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function getDefaultLocaleCode()
        {
            return \Botble\Language\Language::getDefaultLocaleCode();
        }
        
        /**
         * Returns current locale code
         *
         * @return string current locale code
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function getCurrentLocaleFlag()
        {
            return \Botble\Language\Language::getCurrentLocaleFlag();
        }
        
        /**
         * Returns supported languages language key
         *
         * @return array keys of supported languages
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function getSupportedLanguagesKeys()
        {
            return \Botble\Language\Language::getSupportedLanguagesKeys();
        }
        
        /**
         * Check if Locale exists on the supported locales array
         *
         * @param string|boolean $locale string|bool Locale to be checked
         * @return boolean is the locale supported?
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function checkLocaleInSupportedLocales($locale)
        {
            return \Botble\Language\Language::checkLocaleInSupportedLocales($locale);
        }
        
        /**
         * Set current route name
         *
         * @param string $routeName current route name
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function setRouteName($routeName)
        {
            return \Botble\Language\Language::setRouteName($routeName);
        }
        
        /**
         * Translate routes and save them to the translated routes array (used in the localize route filter)
         *
         * @param string $routeName Key of the translated string
         * @return string Translated string
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function transRoute($routeName)
        {
            return \Botble\Language\Language::transRoute($routeName);
        }
        
        /**
         * Returns the translation key for a given path
         *
         * @param string $path Path to get the key translated
         * @return string|false Key for translation, false if not exist
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function getRouteNameFromAPath($path)
        {
            return \Botble\Language\Language::getRouteNameFromAPath($path);
        }
        
        /**
         * Sets the base url for the site
         *
         * @param string $url Base url for the site
         * @author Marc Cámara <mcamara88@gmail.com>
         * @static 
         */ 
        public static function setBaseUrl($url)
        {
            return \Botble\Language\Language::setBaseUrl($url);
        }
        
        /**
         * 
         *
         * @param array $select
         * @return mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getCurrentDataLanguage($select = array())
        {
            return \Botble\Language\Language::getCurrentDataLanguage($select);
        }
        
        /**
         * 
         *
         * @param array $select
         * @return mixed 
         * @author Sang Nguyen
         * @since 2.2
         * @static 
         */ 
        public static function getDefaultLanguage($select = array())
        {
            return \Botble\Language\Language::getDefaultLanguage($select);
        }
        
        /**
         * 
         *
         * @param string $screen
         * @param \Illuminate\Http\Request $request
         * @param \Eloquent|false $data
         * @return bool 
         * @static 
         */ 
        public static function saveLanguage($screen, $request, $data)
        {
            return \Botble\Language\Language::saveLanguage($screen, $request, $data);
        }
        
        /**
         * 
         *
         * @param string $screen
         * @param \Eloquent|false $data
         * @static 
         */ 
        public static function deleteLanguage($screen, $data)
        {
            return \Botble\Language\Language::deleteLanguage($screen, $data);
        }
         
    }
 
}

namespace Botble\Analytics\Facades { 

    class AnalyticsFacade {
        
        /**
         * 
         *
         * @param string $viewId
         * @return $this 
         * @static 
         */ 
        public static function setViewId($viewId)
        {
            return \Botble\Analytics\Analytics::setViewId($viewId);
        }
        
        /**
         * 
         *
         * @param \Botble\Analytics\Period $period
         * @return \Botble\Analytics\Collection 
         * @static 
         */ 
        public static function fetchVisitorsAndPageViews($period)
        {
            return \Botble\Analytics\Analytics::fetchVisitorsAndPageViews($period);
        }
        
        /**
         * 
         *
         * @param \Botble\Analytics\Period $period
         * @return \Botble\Analytics\Collection 
         * @static 
         */ 
        public static function fetchTotalVisitorsAndPageViews($period)
        {
            return \Botble\Analytics\Analytics::fetchTotalVisitorsAndPageViews($period);
        }
        
        /**
         * 
         *
         * @param \Botble\Analytics\Period $period
         * @param int $maxResults
         * @return \Botble\Analytics\Collection 
         * @static 
         */ 
        public static function fetchMostVisitedPages($period, $maxResults = 20)
        {
            return \Botble\Analytics\Analytics::fetchMostVisitedPages($period, $maxResults);
        }
        
        /**
         * 
         *
         * @param \Botble\Analytics\Period $period
         * @param int $maxResults
         * @return \Botble\Analytics\Collection 
         * @static 
         */ 
        public static function fetchTopReferrers($period, $maxResults = 20)
        {
            return \Botble\Analytics\Analytics::fetchTopReferrers($period, $maxResults);
        }
        
        /**
         * 
         *
         * @param \Botble\Analytics\Period $period
         * @param int $maxResults
         * @return \Botble\Analytics\Collection 
         * @static 
         */ 
        public static function fetchTopBrowsers($period, $maxResults = 10)
        {
            return \Botble\Analytics\Analytics::fetchTopBrowsers($period, $maxResults);
        }
        
        /**
         * Call the query method on the authenticated client.
         *
         * @param \Botble\Analytics\Period $period
         * @param string $metrics
         * @param array $others
         * @return array|null 
         * @static 
         */ 
        public static function performQuery($period, $metrics, $others = array())
        {
            return \Botble\Analytics\Analytics::performQuery($period, $metrics, $others);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function getAnalyticsService()
        {
            return \Botble\Analytics\Analytics::getAnalyticsService();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Botble\Analytics\Analytics::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Botble\Analytics\Analytics::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Botble\Analytics\Analytics::hasMacro($name);
        }
         
    }
 
}

namespace Botble\AuditLog\Facades { 

    class AuditLogFacade {
        
        /**
         * 
         *
         * @param string $screen
         * @param \Eloquent|false $data
         * @param string $action
         * @param string $type
         * @return bool 
         * @static 
         */ 
        public static function handleEvent($screen, $data, $action, $type = 'info')
        {
            return \Botble\AuditLog\AuditLog::handleEvent($screen, $data, $action, $type);
        }
        
        /**
         * 
         *
         * @param $screen
         * @param $data
         * @return string 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getReferenceName($screen, $data)
        {
            return \Botble\AuditLog\AuditLog::getReferenceName($screen, $data);
        }
         
    }
 
}

namespace Botble\LogViewer\Facades { 

    class LogViewerFacade {
        
        /**
         * Get the log levels.
         *
         * @param bool $flip
         * @return array 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function levels($flip = false)
        {
            return \Botble\LogViewer\LogViewer::levels($flip);
        }
        
        /**
         * Get the translated log levels.
         *
         * @param string|null $locale
         * @return array 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function levelsNames($locale = null)
        {
            return \Botble\LogViewer\LogViewer::levelsNames($locale);
        }
        
        /**
         * Set the log storage path.
         *
         * @param string $path
         * @return \Botble\LogViewer\LogViewer 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function setPath($path)
        {
            return \Botble\LogViewer\LogViewer::setPath($path);
        }
        
        /**
         * Get the log pattern.
         *
         * @return string 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function getPattern()
        {
            return \Botble\LogViewer\LogViewer::getPattern();
        }
        
        /**
         * Set the log pattern.
         *
         * @param string $date
         * @param string $prefix
         * @param string $extension
         * @return \Botble\LogViewer\LogViewer 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function setPattern($prefix = 'laravel-', $date = '[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]', $extension = '.log')
        {
            return \Botble\LogViewer\LogViewer::setPattern($prefix, $date, $extension);
        }
        
        /**
         * Get all logs.
         *
         * @return \Botble\LogViewer\Entities\LogCollection 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function all()
        {
            return \Botble\LogViewer\LogViewer::all();
        }
        
        /**
         * Paginate all logs.
         *
         * @param int $perPage
         * @return \Illuminate\Pagination\LengthAwarePaginator 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function paginate($perPage = 30)
        {
            return \Botble\LogViewer\LogViewer::paginate($perPage);
        }
        
        /**
         * Get a log.
         *
         * @param string $date
         * @return \Botble\LogViewer\Entities\Log 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function get($date)
        {
            return \Botble\LogViewer\LogViewer::get($date);
        }
        
        /**
         * Get the log entries.
         *
         * @param string $date
         * @param string $level
         * @return \Botble\LogViewer\Entities\LogEntryCollection 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function entries($date, $level = 'all')
        {
            return \Botble\LogViewer\LogViewer::entries($date, $level);
        }
        
        /**
         * Download a log file.
         *
         * @param string $date
         * @param string|null $filename
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function download($date, $filename = null, $headers = array())
        {
            return \Botble\LogViewer\LogViewer::download($date, $filename, $headers);
        }
        
        /**
         * Get logs statistics.
         *
         * @return array 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function stats()
        {
            return \Botble\LogViewer\LogViewer::stats();
        }
        
        /**
         * Get logs statistics table.
         *
         * @param string|null $locale
         * @return \Botble\LogViewer\Tables\StatsTable 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function statsTable($locale = null)
        {
            return \Botble\LogViewer\LogViewer::statsTable($locale);
        }
        
        /**
         * Delete the log.
         *
         * @param string $date
         * @return bool 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function delete($date)
        {
            return \Botble\LogViewer\LogViewer::delete($date);
        }
        
        /**
         * Get all valid log files.
         *
         * @return array 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function files()
        {
            return \Botble\LogViewer\LogViewer::files();
        }
        
        /**
         * List the log files (only dates).
         *
         * @return array 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function dates()
        {
            return \Botble\LogViewer\LogViewer::dates();
        }
        
        /**
         * Get logs count.
         *
         * @return int 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function count()
        {
            return \Botble\LogViewer\LogViewer::count();
        }
        
        /**
         * Get entries total from all logs.
         *
         * @param string $level
         * @return int 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function total($level = 'all')
        {
            return \Botble\LogViewer\LogViewer::total($level);
        }
        
        /**
         * Get logs tree.
         *
         * @param bool $trans
         * @return array 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function tree($trans = false)
        {
            return \Botble\LogViewer\LogViewer::tree($trans);
        }
        
        /**
         * Get logs menu.
         *
         * @param bool $trans
         * @return array 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function menu($trans = true)
        {
            return \Botble\LogViewer\LogViewer::menu($trans);
        }
        
        /**
         * Determine if the log folder is empty or not.
         *
         * @return bool 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function isEmpty()
        {
            return \Botble\LogViewer\LogViewer::isEmpty();
        }
         
    }
 
}

namespace Botble\Note\Facades { 

    class NoteFacade {
        
        /**
         * 
         *
         * @param $module
         * @author Sang Nguyen
         * @static 
         */ 
        public static function registerModule($screen)
        {
            return \Botble\Note\Note::registerModule($screen);
        }
        
        /**
         * 
         *
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getScreens()
        {
            return \Botble\Note\Note::getScreens();
        }
        
        /**
         * 
         *
         * @param string $screen
         * @param \Illuminate\Http\Request $request
         * @param \Eloquent  false $object
         * @author Sang Nguyen
         * @static 
         */ 
        public static function saveNote($screen, $request, $object)
        {
            return \Botble\Note\Note::saveNote($screen, $request, $object);
        }
        
        /**
         * 
         *
         * @param \Eloquent|false $data
         * @param string $screen
         * @return mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function deleteNote($screen, $data)
        {
            return \Botble\Note\Note::deleteNote($screen, $data);
        }
         
    }
 
}

namespace Botble\Captcha\Facades { 

    class CaptchaFacade {
        
        /**
         * Set language code.
         *
         * @param string $lang
         * @return self 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function setLang($lang)
        {
            return \Botble\Captcha\Captcha::setLang($lang);
        }
        
        /**
         * Set HTTP Request Client.
         *
         * @param \Botble\Captcha\RequestContract $request
         * @return self 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function setRequestClient($request)
        {
            return \Botble\Captcha\Captcha::setRequestClient($request);
        }
        
        /**
         * Set Captcha Attributes.
         *
         * @param \Botble\Captcha\AttributesContract $attributes
         * @return self 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function setAttributes($attributes)
        {
            return \Botble\Captcha\Captcha::setAttributes($attributes);
        }
        
        /**
         * Display Captcha.
         *
         * @param string|null $name
         * @param array $attributes
         * @return string 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function display($name = null, $attributes = array())
        {
            return \Botble\Captcha\Captcha::display($name, $attributes);
        }
        
        /**
         * Display image Captcha.
         *
         * @param string|null $name
         * @param array $attributes
         * @return string 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function image($name = null, $attributes = array())
        {
            return \Botble\Captcha\Captcha::image($name, $attributes);
        }
        
        /**
         * Display audio Captcha.
         *
         * @param string|null $name
         * @param array $attributes
         * @return string 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function audio($name = null, $attributes = array())
        {
            return \Botble\Captcha\Captcha::audio($name, $attributes);
        }
        
        /**
         * Verify Response.
         *
         * @param string $response
         * @param string $clientIp
         * @return bool 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function verify($response, $clientIp = null)
        {
            return \Botble\Captcha\Captcha::verify($response, $clientIp);
        }
        
        /**
         * Calls the reCAPTCHA site verify API to verify whether the user passes CAPTCHA
         * test using a PSR-7 ServerRequest object.
         *
         * @param \Psr\Http\Message\ServerRequestInterface $request
         * @return bool 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function verifyRequest($request)
        {
            return \Botble\Captcha\Captcha::verifyRequest($request);
        }
        
        /**
         * Get script tag.
         *
         * @param string|null $callbackName
         * @return string 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function script($callbackName = null)
        {
            return \Botble\Captcha\Captcha::script($callbackName);
        }
        
        /**
         * Get script tag with a callback function.
         *
         * @param array $captcha
         * @param string $callbackName
         * @return string 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function scriptWithCallback($captcha, $callbackName = 'captchaRenderCallback')
        {
            return \Botble\Captcha\Captcha::scriptWithCallback($captcha, $callbackName);
        }
         
    }
 
}

namespace Botble\Media\Facades { 

    class RvMediaFacade {
        
        /**
         * 
         *
         * @return string 
         * @author Sang Nguyen
         * @throws \Throwable
         * @static 
         */ 
        public static function renderHeader()
        {
            return \Botble\Media\RvMedia::renderHeader();
        }
        
        /**
         * 
         *
         * @return string 
         * @author Sang Nguyen
         * @throws \Throwable
         * @static 
         */ 
        public static function renderFooter()
        {
            return \Botble\Media\RvMedia::renderFooter();
        }
        
        /**
         * 
         *
         * @return string 
         * @author Sang Nguyen
         * @throws \Throwable
         * @static 
         */ 
        public static function renderContent()
        {
            return \Botble\Media\RvMedia::renderContent();
        }
        
        /**
         * Get all urls
         *
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getUrls()
        {
            return \Botble\Media\RvMedia::getUrls();
        }
        
        /**
         * 
         *
         * @param $data
         * @param null $message
         * @return \Illuminate\Http\JsonResponse 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function responseSuccess($data, $message = null)
        {
            return \Botble\Media\RvMedia::responseSuccess($data, $message);
        }
        
        /**
         * 
         *
         * @param $message
         * @param array $data
         * @param null $code
         * @param int $status
         * @return \Illuminate\Http\JsonResponse 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function responseError($message, $data = array(), $code = null, $status = 200)
        {
            return \Botble\Media\RvMedia::responseError($message, $data, $code, $status);
        }
        
        /**
         * 
         *
         * @param $url
         * @return array|mixed 
         * @static 
         */ 
        public static function getAllImageSizes($url)
        {
            return \Botble\Media\RvMedia::getAllImageSizes($url);
        }
        
        /**
         * 
         *
         * @param int $folder_id
         * @param $fileUpload
         * @return \Illuminate\Http\JsonResponse|array 
         * @author Sang Nguyen
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function handleUpload($fileUpload, $folder_id = 0, $path = '')
        {
            return \Botble\Media\RvMedia::handleUpload($fileUpload, $folder_id, $path);
        }
        
        /**
         * 
         *
         * @param array $permissions
         * @author Sang Nguyen
         * @static 
         */ 
        public static function setPermissions($permissions)
        {
            return \Botble\Media\RvMedia::setPermissions($permissions);
        }
        
        /**
         * 
         *
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getPermissions()
        {
            return \Botble\Media\RvMedia::getPermissions();
        }
        
        /**
         * 
         *
         * @param $permission
         * @author Sang Nguyen
         * @static 
         */ 
        public static function removePermission($permission)
        {
            return \Botble\Media\RvMedia::removePermission($permission);
        }
        
        /**
         * 
         *
         * @param $permission
         * @author Sang Nguyen
         * @static 
         */ 
        public static function addPermission($permission)
        {
            return \Botble\Media\RvMedia::addPermission($permission);
        }
        
        /**
         * 
         *
         * @param $permission
         * @return bool 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function hasPermission($permission)
        {
            return \Botble\Media\RvMedia::hasPermission($permission);
        }
        
        /**
         * 
         *
         * @param array $permissions
         * @return bool 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function hasAnyPermission($permissions)
        {
            return \Botble\Media\RvMedia::hasAnyPermission($permissions);
        }
        
        /**
         * Returns a file size limit in bytes based on the PHP upload_max_filesize and post_max_size
         *
         * @return float|int 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getServerConfigMaxUploadFileSize()
        {
            return \Botble\Media\RvMedia::getServerConfigMaxUploadFileSize();
        }
        
        /**
         * 
         *
         * @param $size
         * @return float - bytes
         * @author Sang Nguyen
         * @static 
         */ 
        public static function parseSize($size)
        {
            return \Botble\Media\RvMedia::parseSize($size);
        }
         
    }
 
}

namespace Botble\Menu\Facades { 

    class MenuFacade {
        
        /**
         * 
         *
         * @param $args
         * @return mixed|null|string 
         * @author Sang Nguyen, Tedozi Manson
         * @static 
         */ 
        public static function generateMenu($args = array())
        {
            return \Botble\Menu\Menu::generateMenu($args);
        }
        
        /**
         * 
         *
         * @param array $args
         * @return mixed|null|string 
         * @author Sang Nguyen, Tedozi Manson
         * @static 
         */ 
        public static function generateSelect($args = array())
        {
            return \Botble\Menu\Menu::generateSelect($args);
        }
        
        /**
         * 
         *
         * @param $slug
         * @param $active
         * @return bool 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function hasMenu($slug, $active)
        {
            return \Botble\Menu\Menu::hasMenu($slug, $active);
        }
        
        /**
         * 
         *
         * @param $menu_nodes
         * @param $menu_id
         * @param $parent_id
         * @author Sang Nguyen, Tedozi Manson
         * @static 
         */ 
        public static function recursiveSaveMenu($menu_nodes, $menu_id, $parent_id)
        {
            return \Botble\Menu\Menu::recursiveSaveMenu($menu_nodes, $menu_id, $parent_id);
        }
         
    }
 
}

namespace Botble\SeoHelper\Facades { 

    class SeoHelperFacade {
        
        /**
         * Get SeoMeta instance.
         *
         * @return \Botble\SeoHelper\Contracts\SeoMetaContract 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function meta()
        {
            return \Botble\SeoHelper\SeoHelper::meta();
        }
        
        /**
         * Set SeoMeta instance.
         *
         * @param \Botble\SeoHelper\Contracts\SeoMetaContract $seoMeta
         * @return \Botble\SeoHelper\SeoHelper 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function setSeoMeta($seoMeta)
        {
            return \Botble\SeoHelper\SeoHelper::setSeoMeta($seoMeta);
        }
        
        /**
         * Get SeoOpenGraph instance.
         *
         * @return \Botble\SeoHelper\Contracts\SeoOpenGraphContract 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function openGraph()
        {
            return \Botble\SeoHelper\SeoHelper::openGraph();
        }
        
        /**
         * Get SeoOpenGraph instance.
         *
         * @param \Botble\SeoHelper\Contracts\SeoOpenGraphContract $seoOpenGraph
         * @return \Botble\SeoHelper\SeoHelper 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function setSeoOpenGraph($seoOpenGraph)
        {
            return \Botble\SeoHelper\SeoHelper::setSeoOpenGraph($seoOpenGraph);
        }
        
        /**
         * Get SeoTwitter instance.
         *
         * @return \Botble\SeoHelper\Contracts\SeoTwitterContract 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function twitter()
        {
            return \Botble\SeoHelper\SeoHelper::twitter();
        }
        
        /**
         * Set SeoTwitter instance.
         *
         * @param \Botble\SeoHelper\Contracts\SeoTwitterContract $seoTwitter
         * @return \Botble\SeoHelper\SeoHelper 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function setSeoTwitter($seoTwitter)
        {
            return \Botble\SeoHelper\SeoHelper::setSeoTwitter($seoTwitter);
        }
        
        /**
         * Set title.
         *
         * @param string $title
         * @param string|null $siteName
         * @param string|null $separator
         * @return \Botble\SeoHelper\SeoHelper 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function setTitle($title, $siteName = null, $separator = null)
        {
            return \Botble\SeoHelper\SeoHelper::setTitle($title, $siteName, $separator);
        }
        
        /**
         * Set description.
         *
         * @param string $description
         * @return \Botble\SeoHelper\Contracts\SeoHelperContract 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function setDescription($description)
        {
            return \Botble\SeoHelper\SeoHelper::setDescription($description);
        }
        
        /**
         * Set keywords.
         *
         * @param array|string $keywords
         * @return \Botble\SeoHelper\SeoHelper 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function setKeywords($keywords)
        {
            return \Botble\SeoHelper\SeoHelper::setKeywords($keywords);
        }
        
        /**
         * Render all seo tags.
         *
         * @return string 
         * @author ARCANEDEV <arcanedev.maroc@gmail.com>
         * @static 
         */ 
        public static function render()
        {
            return \Botble\SeoHelper\SeoHelper::render();
        }
        
        /**
         * 
         *
         * @param $screen
         * @param \Illuminate\Http\Request $request
         * @param $object
         * @return bool 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function saveMetaData($screen, $request, $object)
        {
            return \Botble\SeoHelper\SeoHelper::saveMetaData($screen, $request, $object);
        }
        
        /**
         * 
         *
         * @param $screen
         * @param $object
         * @return bool 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function deleteMetaData($screen, $object)
        {
            return \Botble\SeoHelper\SeoHelper::deleteMetaData($screen, $object);
        }
         
    }
 
}

namespace Botble\Theme\Facades { 

    class ThemeFacade {
        
        /**
         * Return breadcrumb instance.
         *
         * @return \Botble\Theme\Breadcrumb 
         * @static 
         */ 
        public static function breadcrumb()
        {
            return \Botble\Theme\Theme::breadcrumb();
        }
        
        /**
         * Get current theme name.
         *
         * @return string 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function getThemeName()
        {
            return \Botble\Theme\Theme::getThemeName();
        }
        
        /**
         * Get current layout name.
         *
         * @return string 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function getLayoutName()
        {
            return \Botble\Theme\Theme::getLayoutName();
        }
        
        /**
         * Get theme namespace.
         *
         * @param string $path
         * @return string 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function getThemeNamespace($path = '')
        {
            return \Botble\Theme\Theme::getThemeNamespace($path);
        }
        
        /**
         * Check theme exists.
         *
         * @param string $theme
         * @return boolean 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function exists($theme)
        {
            return \Botble\Theme\Theme::exists($theme);
        }
        
        /**
         * Get theme config.
         *
         * @param string $key
         * @return mixed 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function getConfig($key = null)
        {
            return \Botble\Theme\Theme::getConfig($key);
        }
        
        /**
         * Fire event to config listener.
         *
         * @param string $event
         * @param mixed $args
         * @return void 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function fire($event, $args)
        {
            \Botble\Theme\Theme::fire($event, $args);
        }
        
        /**
         * Set up a theme name.
         *
         * @param string $theme
         * @throws UnknownThemeException
         * @return \Theme 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function theme($theme = null)
        {
            return \Botble\Theme\Theme::theme($theme);
        }
        
        /**
         * Alias of theme method.
         *
         * @param string $theme
         * @return \Theme 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function uses($theme = null)
        {
            return \Botble\Theme\Theme::uses($theme);
        }
        
        /**
         * Set up a layout name.
         *
         * @param string $layout
         * @return \Theme 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function layout($layout)
        {
            return \Botble\Theme\Theme::layout($layout);
        }
        
        /**
         * Get theme path.
         *
         * @param string $forceThemeName
         * @return string 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function path($forceThemeName = null)
        {
            return \Botble\Theme\Theme::path($forceThemeName);
        }
        
        /**
         * Set a place to regions.
         *
         * @param string $region
         * @param string $value
         * @return \Theme 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function set($region, $value)
        {
            return \Botble\Theme\Theme::set($region, $value);
        }
        
        /**
         * Append a place to existing region.
         *
         * @param string $region
         * @param string $value
         * @return \Theme 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function append($region, $value)
        {
            return \Botble\Theme\Theme::append($region, $value);
        }
        
        /**
         * Prepend a place to existing region.
         *
         * @param string $region
         * @param string $value
         * @return \Theme 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function prepend($region, $value)
        {
            return \Botble\Theme\Theme::prepend($region, $value);
        }
        
        /**
         * Binding data to view.
         *
         * @param string $variable
         * @param mixed $callback
         * @return mixed 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function bind($variable, $callback = null)
        {
            return \Botble\Theme\Theme::bind($variable, $callback);
        }
        
        /**
         * Check having binded data.
         *
         * @param string $variable
         * @return boolean 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function binded($variable)
        {
            return \Botble\Theme\Theme::binded($variable);
        }
        
        /**
         * Assign data across all views.
         *
         * @param mixed $key
         * @param mixed $value
         * @return mixed 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function share($key, $value)
        {
            return \Botble\Theme\Theme::share($key, $value);
        }
        
        /**
         * Set up a partial.
         *
         * @param string $view
         * @param array $args
         * @throws UnknownPartialFileException
         * @return mixed 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function partial($view, $args = array())
        {
            return \Botble\Theme\Theme::partial($view, $args);
        }
        
        /**
         * The same as "partial", but having prefix layout.
         *
         * @param string $view
         * @param array $args
         * @throws UnknownPartialFileException
         * @return mixed 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function partialWithLayout($view, $args = array())
        {
            return \Botble\Theme\Theme::partialWithLayout($view, $args);
        }
        
        /**
         * Load a partial
         *
         * @param string $view
         * @param string $partialDir
         * @param array $args
         * @throws UnknownPartialFileException
         * @return mixed 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function loadPartial($view, $partialDir, $args)
        {
            return \Botble\Theme\Theme::loadPartial($view, $partialDir, $args);
        }
        
        /**
         * Watch and set up a partial from anywhere.
         * 
         * This method will first try to load the partial from current theme. If partial
         * is not found in theme then it loads it from app (i.e. app/views/partials)
         *
         * @param string $view
         * @param array $args
         * @throws UnknownPartialFileException
         * @return mixed 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function watchPartial($view, $args = array())
        {
            return \Botble\Theme\Theme::watchPartial($view, $args);
        }
        
        /**
         * Hook a partial before rendering.
         *
         * @param mixed $view
         * @param \closure $callback
         * @param string $layout
         * @return void 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function partialComposer($view, $callback, $layout = null)
        {
            \Botble\Theme\Theme::partialComposer($view, $callback, $layout);
        }
        
        /**
         * Hook a partial before rendering.
         *
         * @param mixed $view
         * @param \closure $callback
         * @param string $layout
         * @return void 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function composer($view, $callback, $layout = null)
        {
            \Botble\Theme\Theme::composer($view, $callback, $layout);
        }
        
        /**
         * Parses and compiles strings by using blade template system.
         *
         * @param string $str
         * @param array $data
         * @param boolean $phpCompile
         * @throws Exception
         * @return string 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function blader($str, $data = array(), $phpCompile = true)
        {
            return \Botble\Theme\Theme::blader($str, $data, $phpCompile);
        }
        
        /**
         * Check region exists.
         *
         * @param string $region
         * @return boolean 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function has($region)
        {
            return \Botble\Theme\Theme::has($region);
        }
        
        /**
         * Render a region.
         *
         * @param string $region
         * @param mixed $default
         * @return string 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function get($region, $default = null)
        {
            return \Botble\Theme\Theme::get($region, $default);
        }
        
        /**
         * Render a region.
         *
         * @param string $region
         * @param mixed $default
         * @return string 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function place($region, $default = null)
        {
            return \Botble\Theme\Theme::place($region, $default);
        }
        
        /**
         * Place content in sub-view.
         *
         * @return string 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function content()
        {
            return \Botble\Theme\Theme::content();
        }
        
        /**
         * Return asset instance.
         *
         * @return \Botble\Theme\Asset 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function asset()
        {
            return \Botble\Theme\Theme::asset();
        }
        
        /**
         * Set up a content to template.
         *
         * @param string $view
         * @param array $args
         * @return \Theme 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function setUpContent($view, $args = array())
        {
            return \Botble\Theme\Theme::setUpContent($view, $args);
        }
        
        /**
         * Set up a content to template.
         *
         * @param string $view
         * @param array $args
         * @param string $type
         * @return \Theme 
         * @static 
         */ 
        public static function of($view, $args = array(), $type = null)
        {
            return \Botble\Theme\Theme::of($view, $args, $type);
        }
        
        /**
         * Compile blade without PHP.
         *
         * @param string $str
         * @param array $data
         * @return string 
         * @static 
         */ 
        public static function bladerWithOutServerScript($str, $data = array())
        {
            return \Botble\Theme\Theme::bladerWithOutServerScript($str, $data);
        }
        
        /**
         * The same as "of", but having prefix layout.
         *
         * @param string $view
         * @param array $args
         * @param string $type
         * @return \Theme 
         * @static 
         */ 
        public static function ofWithLayout($view, $args = array(), $type = null)
        {
            return \Botble\Theme\Theme::ofWithLayout($view, $args, $type);
        }
        
        /**
         * Container view.
         * 
         * Using a container module view inside a theme, this is
         * useful when you separate a view inside a theme.
         *
         * @param string $view
         * @param array $args
         * @return \Theme 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function scope($view, $args = array())
        {
            return \Botble\Theme\Theme::scope($view, $args);
        }
        
        /**
         * Load subview from direct path.
         *
         * @param string $view
         * @param array $args
         * @return \Theme 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function load($view, $args = array())
        {
            return \Botble\Theme\Theme::load($view, $args);
        }
        
        /**
         * Get all arguments assigned to content.
         *
         * @return mixed 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function getContentArguments()
        {
            return \Botble\Theme\Theme::getContentArguments();
        }
        
        /**
         * Get a argument assigned to content.
         *
         * @param string $key
         * @param null $default
         * @return mixed 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function getContentArgument($key, $default = null)
        {
            return \Botble\Theme\Theme::getContentArgument($key, $default);
        }
        
        /**
         * Checking content argument existing.
         *
         * @param string $key
         * @return boolean 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function hasContentArgument($key)
        {
            return \Botble\Theme\Theme::hasContentArgument($key);
        }
        
        /**
         * Find view location.
         *
         * @param boolean $real_path
         * @return string 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function location($real_path = false)
        {
            return \Botble\Theme\Theme::location($real_path);
        }
        
        /**
         * Return a template with content.
         *
         * @param integer $statusCode
         * @throws UnknownLayoutFileException
         * @return \Response 
         * @author Teepluss <admin@laravel.in.th>
         * @static 
         */ 
        public static function render($statusCode = 200)
        {
            return \Botble\Theme\Theme::render($statusCode);
        }
        
        /**
         * 
         *
         * @param $view
         * @return bool 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function checkViewExists($view, $return = false)
        {
            return \Botble\Theme\Theme::checkViewExists($view, $return);
        }
        
        /**
         * 
         *
         * @return string 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function header()
        {
            return \Botble\Theme\Theme::header();
        }
        
        /**
         * 
         *
         * @return string 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function footer()
        {
            return \Botble\Theme\Theme::footer();
        }
         
    }

    class ThemeOptionFacade {
        
        /**
         * Prepare args of theme options
         *
         * @return array|mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function constructArgs()
        {
            return \Botble\Theme\ThemeOption::constructArgs();
        }
        
        /**
         * Prepare sections to display theme options page
         *
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function constructSections()
        {
            return \Botble\Theme\ThemeOption::constructSections();
        }
        
        /**
         * Prepare fields to display theme options page
         *
         * @param string $section_id
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function constructFields($section_id = '')
        {
            return \Botble\Theme\ThemeOption::constructFields($section_id);
        }
        
        /**
         * 
         *
         * @param string $id
         * @return bool 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getSection($id = '')
        {
            return \Botble\Theme\ThemeOption::getSection($id);
        }
        
        /**
         * 
         *
         * @author Sang Nguyen
         * @static 
         */ 
        public static function checkOptName()
        {
            return \Botble\Theme\ThemeOption::checkOptName();
        }
        
        /**
         * 
         *
         * @return array|mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getSections()
        {
            return \Botble\Theme\ThemeOption::getSections();
        }
        
        /**
         * 
         *
         * @param array $sections
         * @author Sang Nguyen
         * @static 
         */ 
        public static function setSections($sections = array())
        {
            return \Botble\Theme\ThemeOption::setSections($sections);
        }
        
        /**
         * 
         *
         * @param array $section
         * @author Sang Nguyen
         * @static 
         */ 
        public static function setSection($section = array())
        {
            return \Botble\Theme\ThemeOption::setSection($section);
        }
        
        /**
         * 
         *
         * @param $type
         * @return mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getPriority($type)
        {
            return \Botble\Theme\ThemeOption::getPriority($type);
        }
        
        /**
         * 
         *
         * @param string $section_id
         * @param array $fields
         * @author Sang Nguyen
         * @static 
         */ 
        public static function processFieldsArray($section_id = '', $fields = array())
        {
            return \Botble\Theme\ThemeOption::processFieldsArray($section_id, $fields);
        }
        
        /**
         * 
         *
         * @param array $field
         * @author Sang Nguyen
         * @static 
         */ 
        public static function setField($field = array())
        {
            return \Botble\Theme\ThemeOption::setField($field);
        }
        
        /**
         * 
         *
         * @param string $id
         * @param bool $fields
         * @author Sang Nguyen
         * @static 
         */ 
        public static function removeSection($id = '', $fields = false)
        {
            return \Botble\Theme\ThemeOption::removeSection($id, $fields);
        }
        
        /**
         * 
         *
         * @param string $id
         * @param bool $hide
         * @author Sang Nguyen
         * @static 
         */ 
        public static function hideSection($id = '', $hide = true)
        {
            return \Botble\Theme\ThemeOption::hideSection($id, $hide);
        }
        
        /**
         * 
         *
         * @param string $id
         * @return bool 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getField($id = '')
        {
            return \Botble\Theme\ThemeOption::getField($id);
        }
        
        /**
         * 
         *
         * @param string $id
         * @param bool $hide
         * @author Sang Nguyen
         * @static 
         */ 
        public static function hideField($id = '', $hide = true)
        {
            return \Botble\Theme\ThemeOption::hideField($id, $hide);
        }
        
        /**
         * 
         *
         * @param string $id
         * @return bool 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function removeField($id = '')
        {
            return \Botble\Theme\ThemeOption::removeField($id);
        }
        
        /**
         * 
         *
         * @param array $tab
         * @author Sang Nguyen
         * @static 
         */ 
        public static function setHelpTab($tab = array())
        {
            return \Botble\Theme\ThemeOption::setHelpTab($tab);
        }
        
        /**
         * 
         *
         * @param string $content
         * @author Sang Nguyen
         * @static 
         */ 
        public static function setHelpSidebar($content = '')
        {
            return \Botble\Theme\ThemeOption::setHelpSidebar($content);
        }
        
        /**
         * 
         *
         * @return array|mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getArgs()
        {
            return \Botble\Theme\ThemeOption::getArgs();
        }
        
        /**
         * 
         *
         * @param array $args
         * @author Sang Nguyen
         * @static 
         */ 
        public static function setArgs($args = array())
        {
            return \Botble\Theme\ThemeOption::setArgs($args);
        }
        
        /**
         * 
         *
         * @param string $key
         * @return null 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getArg($key = '')
        {
            return \Botble\Theme\ThemeOption::getArg($key);
        }
        
        /**
         * 
         *
         * @param string $key
         * @param string $value
         * @return void 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function setOption($key, $value = '')
        {
            \Botble\Theme\ThemeOption::setOption($key, $value);
        }
        
        /**
         * 
         *
         * @param $field
         * @return mixed|string 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function renderField($field)
        {
            return \Botble\Theme\ThemeOption::renderField($field);
        }
        
        /**
         * 
         *
         * @param string $key
         * @return bool 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function hasOption($key)
        {
            return \Botble\Theme\ThemeOption::hasOption($key);
        }
        
        /**
         * 
         *
         * @param string $key
         * @return string 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getOption($key = '', $default = '')
        {
            return \Botble\Theme\ThemeOption::getOption($key, $default);
        }
         
    }

    class ManagerFacade {
        
        /**
         * 
         *
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getAllThemes()
        {
            return \Botble\Theme\Manager::getAllThemes();
        }
        
        /**
         * 
         *
         * @param $theme
         * @return void 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function registerTheme($theme)
        {
            \Botble\Theme\Manager::registerTheme($theme);
        }
        
        /**
         * 
         *
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getThemes()
        {
            return \Botble\Theme\Manager::getThemes();
        }
         
    }
 
}

namespace Botble\Widget\Facades { 

    class WidgetFacade {
        
        /**
         * 
         *
         * @param $widget
         * @return $this 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function registerWidget($widget)
        {
            return \Botble\Widget\Factories\WidgetFactory::registerWidget($widget);
        }
        
        /**
         * 
         *
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getWidgets()
        {
            return \Botble\Widget\Factories\WidgetFactory::getWidgets();
        }
        
        /**
         * Run widget without magic method.
         *
         * @return mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function run()
        {
            return \Botble\Widget\Factories\WidgetFactory::run();
        }
        
        /**
         * Encrypt widget params to be transported via HTTP.
         *
         * @param array $params
         * @return string 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function encryptWidgetParams($params)
        {
            //Method inherited from \Botble\Widget\Factories\AbstractWidgetFactory            
            return \Botble\Widget\Factories\WidgetFactory::encryptWidgetParams($params);
        }
        
        /**
         * Decrypt widget params that were transported via HTTP.
         *
         * @param string $params
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function decryptWidgetParams($params)
        {
            //Method inherited from \Botble\Widget\Factories\AbstractWidgetFactory            
            return \Botble\Widget\Factories\WidgetFactory::decryptWidgetParams($params);
        }
         
    }

    class AsyncFacade {
        
        /**
         * Run widget without magic method.
         *
         * @return mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function run()
        {
            return \Botble\Widget\Factories\AsyncWidgetFactory::run();
        }
        
        /**
         * Encrypt widget params to be transported via HTTP.
         *
         * @param array $params
         * @return string 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function encryptWidgetParams($params)
        {
            //Method inherited from \Botble\Widget\Factories\AbstractWidgetFactory            
            return \Botble\Widget\Factories\AsyncWidgetFactory::encryptWidgetParams($params);
        }
        
        /**
         * Decrypt widget params that were transported via HTTP.
         *
         * @param string $params
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function decryptWidgetParams($params)
        {
            //Method inherited from \Botble\Widget\Factories\AbstractWidgetFactory            
            return \Botble\Widget\Factories\AsyncWidgetFactory::decryptWidgetParams($params);
        }
         
    }

    class WidgetGroupFacade {
        
        /**
         * Get the widget group object.
         *
         * @param $sidebar_id
         * @return \WidgetGroup 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function group($sidebar_id)
        {
            return \Botble\Widget\WidgetGroupCollection::group($sidebar_id);
        }
        
        /**
         * 
         *
         * @param $args
         * @return $this|mixed 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function setGroup($args)
        {
            return \Botble\Widget\WidgetGroupCollection::setGroup($args);
        }
        
        /**
         * 
         *
         * @param $group_id
         * @return $this 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function removeGroup($group_id)
        {
            return \Botble\Widget\WidgetGroupCollection::removeGroup($group_id);
        }
        
        /**
         * 
         *
         * @return array 
         * @author Sang Nguyen
         * @static 
         */ 
        public static function getGroups()
        {
            return \Botble\Widget\WidgetGroupCollection::getGroups();
        }
         
    }
 
}

namespace Botble\ACL\Facades { 

    class AclManagerFacade {
        
        /**
         * Activates the given user.
         *
         * @param mixed $user
         * @return bool 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function activate($user)
        {
            return \Botble\ACL\AclManager::activate($user);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function getUserRepository()
        {
            return \Botble\ACL\AclManager::getUserRepository();
        }
        
        /**
         * Returns the role repository.
         *
         * @return \Botble\ACL\Roles\RoleRepositoryInterface 
         * @static 
         */ 
        public static function getRoleRepository()
        {
            return \Botble\ACL\AclManager::getRoleRepository();
        }
        
        /**
         * Sets the role repository.
         *
         * @param \Botble\ACL\Roles\RoleRepositoryInterface $roles
         * @return void 
         * @static 
         */ 
        public static function setRoleRepository($roles)
        {
            \Botble\ACL\AclManager::setRoleRepository($roles);
        }
        
        /**
         * Returns the activations repository.
         *
         * @return \Botble\ACL\Activations\ActivationRepositoryInterface 
         * @static 
         */ 
        public static function getActivationRepository()
        {
            return \Botble\ACL\AclManager::getActivationRepository();
        }
        
        /**
         * Sets the activations repository.
         *
         * @param \Botble\ACL\Activations\ActivationRepositoryInterface $activations
         * @return void 
         * @static 
         */ 
        public static function setActivationRepository($activations)
        {
            \Botble\ACL\AclManager::setActivationRepository($activations);
        }
         
    }
 
}


namespace  { 

    class App extends \Illuminate\Support\Facades\App {}

    class Artisan extends \Illuminate\Support\Facades\Artisan {}

    class Auth extends \Illuminate\Support\Facades\Auth {}

    class Blade extends \Illuminate\Support\Facades\Blade {}

    class Broadcast extends \Illuminate\Support\Facades\Broadcast {}

    class Bus extends \Illuminate\Support\Facades\Bus {}

    class Cache extends \Illuminate\Support\Facades\Cache {}

    class Config extends \Illuminate\Support\Facades\Config {}

    class Cookie extends \Illuminate\Support\Facades\Cookie {}

    class Crypt extends \Illuminate\Support\Facades\Crypt {}

    class DB extends \Illuminate\Support\Facades\DB {}

    class Eloquent extends \Illuminate\Database\Eloquent\Model {         
            /**
             * Create and return an un-saved model instance.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function make($attributes = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::make($attributes);
            }
         
            /**
             * Register a new global scope.
             *
             * @param string $identifier
             * @param \Illuminate\Database\Eloquent\Scope|\Closure $scope
             * @return $this 
             * @static 
             */ 
            public static function withGlobalScope($identifier, $scope)
            {    
                return \Illuminate\Database\Eloquent\Builder::withGlobalScope($identifier, $scope);
            }
         
            /**
             * Remove a registered global scope.
             *
             * @param \Illuminate\Database\Eloquent\Scope|string $scope
             * @return $this 
             * @static 
             */ 
            public static function withoutGlobalScope($scope)
            {    
                return \Illuminate\Database\Eloquent\Builder::withoutGlobalScope($scope);
            }
         
            /**
             * Remove all or passed registered global scopes.
             *
             * @param array|null $scopes
             * @return $this 
             * @static 
             */ 
            public static function withoutGlobalScopes($scopes = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::withoutGlobalScopes($scopes);
            }
         
            /**
             * Get an array of global scopes that were removed from the query.
             *
             * @return array 
             * @static 
             */ 
            public static function removedScopes()
            {    
                return \Illuminate\Database\Eloquent\Builder::removedScopes();
            }
         
            /**
             * Add a where clause on the primary key to the query.
             *
             * @param mixed $id
             * @return $this 
             * @static 
             */ 
            public static function whereKey($id)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereKey($id);
            }
         
            /**
             * Add a where clause on the primary key to the query.
             *
             * @param mixed $id
             * @return $this 
             * @static 
             */ 
            public static function whereKeyNot($id)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereKeyNot($id);
            }
         
            /**
             * Add a basic where clause to the query.
             *
             * @param string|array|\Closure $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function where($column, $operator = null, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Eloquent\Builder::where($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where" clause to the query.
             *
             * @param \Closure|array|string $column
             * @param string $operator
             * @param mixed $value
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhere($column, $operator = null, $value = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhere($column, $operator, $value);
            }
         
            /**
             * Create a collection of models from plain arrays.
             *
             * @param array $items
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function hydrate($items)
            {    
                return \Illuminate\Database\Eloquent\Builder::hydrate($items);
            }
         
            /**
             * Create a collection of models from a raw query.
             *
             * @param string $query
             * @param array $bindings
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function fromQuery($query, $bindings = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::fromQuery($query, $bindings);
            }
         
            /**
             * Find a model by its primary key.
             *
             * @param mixed $id
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null 
             * @static 
             */ 
            public static function find($id, $columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::find($id, $columns);
            }
         
            /**
             * Find multiple models by their primary keys.
             *
             * @param \Illuminate\Contracts\Support\Arrayable|array $ids
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function findMany($ids, $columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::findMany($ids, $columns);
            }
         
            /**
             * Find a model by its primary key or throw an exception.
             *
             * @param mixed $id
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection 
             * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
             * @static 
             */ 
            public static function findOrFail($id, $columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::findOrFail($id, $columns);
            }
         
            /**
             * Find a model by its primary key or return fresh model instance.
             *
             * @param mixed $id
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function findOrNew($id, $columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::findOrNew($id, $columns);
            }
         
            /**
             * Get the first record matching the attributes or instantiate it.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function firstOrNew($attributes, $values = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::firstOrNew($attributes, $values);
            }
         
            /**
             * Get the first record matching the attributes or create it.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function firstOrCreate($attributes, $values = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::firstOrCreate($attributes, $values);
            }
         
            /**
             * Create or update a record matching the attributes, and fill it with values.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function updateOrCreate($attributes, $values = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::updateOrCreate($attributes, $values);
            }
         
            /**
             * Execute the query and get the first result or throw an exception.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|static 
             * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
             * @static 
             */ 
            public static function firstOrFail($columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
            }
         
            /**
             * Execute the query and get the first result or call a callback.
             *
             * @param \Closure|array $columns
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Model|static|mixed 
             * @static 
             */ 
            public static function firstOr($columns = array(), $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::firstOr($columns, $callback);
            }
         
            /**
             * Get a single column's value from the first result of a query.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function value($column)
            {    
                return \Illuminate\Database\Eloquent\Builder::value($column);
            }
         
            /**
             * Execute the query as a "select" statement.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Collection|static[] 
             * @static 
             */ 
            public static function get($columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::get($columns);
            }
         
            /**
             * Get the hydrated models without eager loading.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model[] 
             * @static 
             */ 
            public static function getModels($columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::getModels($columns);
            }
         
            /**
             * Eager load the relationships for the models.
             *
             * @param array $models
             * @return array 
             * @static 
             */ 
            public static function eagerLoadRelations($models)
            {    
                return \Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
            }
         
            /**
             * Get a generator for the given query.
             *
             * @return \Generator 
             * @static 
             */ 
            public static function cursor()
            {    
                return \Illuminate\Database\Eloquent\Builder::cursor();
            }
         
            /**
             * Chunk the results of a query by comparing numeric IDs.
             *
             * @param int $count
             * @param callable $callback
             * @param string $column
             * @param string|null $alias
             * @return bool 
             * @static 
             */ 
            public static function chunkById($count, $callback, $column = null, $alias = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::chunkById($count, $callback, $column, $alias);
            }
         
            /**
             * Get an array with the values of a given column.
             *
             * @param string $column
             * @param string|null $key
             * @return \Illuminate\Support\Collection 
             * @static 
             */ 
            public static function pluck($column, $key = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::pluck($column, $key);
            }
         
            /**
             * Paginate the given query.
             *
             * @param int $perPage
             * @param array $columns
             * @param string $pageName
             * @param int|null $page
             * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function paginate($perPage = null, $columns = array(), $pageName = 'page', $page = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns, $pageName, $page);
            }
         
            /**
             * Paginate the given query into a simple paginator.
             *
             * @param int $perPage
             * @param array $columns
             * @param string $pageName
             * @param int|null $page
             * @return \Illuminate\Contracts\Pagination\Paginator 
             * @static 
             */ 
            public static function simplePaginate($perPage = null, $columns = array(), $pageName = 'page', $page = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::simplePaginate($perPage, $columns, $pageName, $page);
            }
         
            /**
             * Save a new model and return the instance.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model|$this 
             * @static 
             */ 
            public static function create($attributes = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::create($attributes);
            }
         
            /**
             * Save a new model and return the instance. Allow mass-assignment.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model|$this 
             * @static 
             */ 
            public static function forceCreate($attributes)
            {    
                return \Illuminate\Database\Eloquent\Builder::forceCreate($attributes);
            }
         
            /**
             * Register a replacement for the default delete function.
             *
             * @param \Closure $callback
             * @return void 
             * @static 
             */ 
            public static function onDelete($callback)
            {    
                \Illuminate\Database\Eloquent\Builder::onDelete($callback);
            }
         
            /**
             * Call the given local model scopes.
             *
             * @param array $scopes
             * @return mixed 
             * @static 
             */ 
            public static function scopes($scopes)
            {    
                return \Illuminate\Database\Eloquent\Builder::scopes($scopes);
            }
         
            /**
             * Apply the scopes to the Eloquent builder instance and return it.
             *
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function applyScopes()
            {    
                return \Illuminate\Database\Eloquent\Builder::applyScopes();
            }
         
            /**
             * Prevent the specified relations from being eager loaded.
             *
             * @param mixed $relations
             * @return $this 
             * @static 
             */ 
            public static function without($relations)
            {    
                return \Illuminate\Database\Eloquent\Builder::without($relations);
            }
         
            /**
             * Create a new instance of the model being queried.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function newModelInstance($attributes = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::newModelInstance($attributes);
            }
         
            /**
             * Get the underlying query builder instance.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function getQuery()
            {    
                return \Illuminate\Database\Eloquent\Builder::getQuery();
            }
         
            /**
             * Set the underlying query builder instance.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @return $this 
             * @static 
             */ 
            public static function setQuery($query)
            {    
                return \Illuminate\Database\Eloquent\Builder::setQuery($query);
            }
         
            /**
             * Get a base query builder instance.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function toBase()
            {    
                return \Illuminate\Database\Eloquent\Builder::toBase();
            }
         
            /**
             * Get the relationships being eagerly loaded.
             *
             * @return array 
             * @static 
             */ 
            public static function getEagerLoads()
            {    
                return \Illuminate\Database\Eloquent\Builder::getEagerLoads();
            }
         
            /**
             * Set the relationships being eagerly loaded.
             *
             * @param array $eagerLoad
             * @return $this 
             * @static 
             */ 
            public static function setEagerLoads($eagerLoad)
            {    
                return \Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
            }
         
            /**
             * Get the model instance being queried.
             *
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function getModel()
            {    
                return \Illuminate\Database\Eloquent\Builder::getModel();
            }
         
            /**
             * Set a model instance for the model being queried.
             *
             * @param \Illuminate\Database\Eloquent\Model $model
             * @return $this 
             * @static 
             */ 
            public static function setModel($model)
            {    
                return \Illuminate\Database\Eloquent\Builder::setModel($model);
            }
         
            /**
             * Get the given macro by name.
             *
             * @param string $name
             * @return \Closure 
             * @static 
             */ 
            public static function getMacro($name)
            {    
                return \Illuminate\Database\Eloquent\Builder::getMacro($name);
            }
         
            /**
             * Chunk the results of the query.
             *
             * @param int $count
             * @param callable $callback
             * @return bool 
             * @static 
             */ 
            public static function chunk($count, $callback)
            {    
                return \Illuminate\Database\Eloquent\Builder::chunk($count, $callback);
            }
         
            /**
             * Execute a callback over each item while chunking.
             *
             * @param callable $callback
             * @param int $count
             * @return bool 
             * @static 
             */ 
            public static function each($callback, $count = 1000)
            {    
                return \Illuminate\Database\Eloquent\Builder::each($callback, $count);
            }
         
            /**
             * Execute the query and get the first result.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|static|null 
             * @static 
             */ 
            public static function first($columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::first($columns);
            }
         
            /**
             * Apply the callback's query changes if the given "value" is true.
             *
             * @param mixed $value
             * @param callable $callback
             * @param callable $default
             * @return mixed 
             * @static 
             */ 
            public static function when($value, $callback, $default = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::when($value, $callback, $default);
            }
         
            /**
             * Pass the query to a given callback.
             *
             * @param \Closure $callback
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function tap($callback)
            {    
                return \Illuminate\Database\Eloquent\Builder::tap($callback);
            }
         
            /**
             * Apply the callback's query changes if the given "value" is false.
             *
             * @param mixed $value
             * @param callable $callback
             * @param callable $default
             * @return mixed 
             * @static 
             */ 
            public static function unless($value, $callback, $default = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::unless($value, $callback, $default);
            }
         
            /**
             * Add a relationship count / exists condition to the query.
             *
             * @param string $relation
             * @param string $operator
             * @param int $count
             * @param string $boolean
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean, $callback);
            }
         
            /**
             * Add a relationship count / exists condition to the query with an "or".
             *
             * @param string $relation
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orHas($relation, $operator = '>=', $count = 1)
            {    
                return \Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
            }
         
            /**
             * Add a relationship count / exists condition to the query.
             *
             * @param string $relation
             * @param string $boolean
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function doesntHave($relation, $boolean = 'and', $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::doesntHave($relation, $boolean, $callback);
            }
         
            /**
             * Add a relationship count / exists condition to the query with an "or".
             *
             * @param string $relation
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orDoesntHave($relation)
            {    
                return \Illuminate\Database\Eloquent\Builder::orDoesntHave($relation);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses.
             *
             * @param string $relation
             * @param \Closure|null $callback
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereHas($relation, $callback, $operator, $count);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param string $relation
             * @param \Closure $callback
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereHas($relation, $callback, $operator, $count);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses.
             *
             * @param string $relation
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereDoesntHave($relation, $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereDoesntHave($relation, $callback);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param string $relation
             * @param \Closure $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereDoesntHave($relation, $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereDoesntHave($relation, $callback);
            }
         
            /**
             * Add subselect queries to count the relations.
             *
             * @param mixed $relations
             * @return $this 
             * @static 
             */ 
            public static function withCount($relations)
            {    
                return \Illuminate\Database\Eloquent\Builder::withCount($relations);
            }
         
            /**
             * Merge the where constraints from another query to the current query.
             *
             * @param \Illuminate\Database\Eloquent\Builder $from
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function mergeConstraintsFrom($from)
            {    
                return \Illuminate\Database\Eloquent\Builder::mergeConstraintsFrom($from);
            }
         
            /**
             * Set the columns to be selected.
             *
             * @param array|mixed $columns
             * @return $this 
             * @static 
             */ 
            public static function select($columns = array())
            {    
                return \Illuminate\Database\Query\Builder::select($columns);
            }
         
            /**
             * Add a new "raw" select expression to the query.
             *
             * @param string $expression
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function selectRaw($expression, $bindings = array())
            {    
                return \Illuminate\Database\Query\Builder::selectRaw($expression, $bindings);
            }
         
            /**
             * Add a subselect expression to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|string $query
             * @param string $as
             * @return \Illuminate\Database\Query\Builder|static 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function selectSub($query, $as)
            {    
                return \Illuminate\Database\Query\Builder::selectSub($query, $as);
            }
         
            /**
             * Add a new select column to the query.
             *
             * @param array|mixed $column
             * @return $this 
             * @static 
             */ 
            public static function addSelect($column)
            {    
                return \Illuminate\Database\Query\Builder::addSelect($column);
            }
         
            /**
             * Force the query to only return distinct results.
             *
             * @return $this 
             * @static 
             */ 
            public static function distinct()
            {    
                return \Illuminate\Database\Query\Builder::distinct();
            }
         
            /**
             * Set the table which the query is targeting.
             *
             * @param string $table
             * @return $this 
             * @static 
             */ 
            public static function from($table)
            {    
                return \Illuminate\Database\Query\Builder::from($table);
            }
         
            /**
             * Add a join clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string|null $operator
             * @param string|null $second
             * @param string $type
             * @param bool $where
             * @return $this 
             * @static 
             */ 
            public static function join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
            {    
                return \Illuminate\Database\Query\Builder::join($table, $first, $operator, $second, $type, $where);
            }
         
            /**
             * Add a "join where" clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string $operator
             * @param string $second
             * @param string $type
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function joinWhere($table, $first, $operator, $second, $type = 'inner')
            {    
                return \Illuminate\Database\Query\Builder::joinWhere($table, $first, $operator, $second, $type);
            }
         
            /**
             * Add a left join to the query.
             *
             * @param string $table
             * @param string $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function leftJoin($table, $first, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
            }
         
            /**
             * Add a "join where" clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string $operator
             * @param string $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function leftJoinWhere($table, $first, $operator, $second)
            {    
                return \Illuminate\Database\Query\Builder::leftJoinWhere($table, $first, $operator, $second);
            }
         
            /**
             * Add a right join to the query.
             *
             * @param string $table
             * @param string $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function rightJoin($table, $first, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::rightJoin($table, $first, $operator, $second);
            }
         
            /**
             * Add a "right join where" clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string $operator
             * @param string $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function rightJoinWhere($table, $first, $operator, $second)
            {    
                return \Illuminate\Database\Query\Builder::rightJoinWhere($table, $first, $operator, $second);
            }
         
            /**
             * Add a "cross join" clause to the query.
             *
             * @param string $table
             * @param string|null $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function crossJoin($table, $first = null, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::crossJoin($table, $first, $operator, $second);
            }
         
            /**
             * Merge an array of where clauses and bindings.
             *
             * @param array $wheres
             * @param array $bindings
             * @return void 
             * @static 
             */ 
            public static function mergeWheres($wheres, $bindings)
            {    
                \Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
            }
         
            /**
             * Add a "where" clause comparing two columns to the query.
             *
             * @param string|array $first
             * @param string|null $operator
             * @param string|null $second
             * @param string|null $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereColumn($first, $operator, $second, $boolean);
            }
         
            /**
             * Add an "or where" clause comparing two columns to the query.
             *
             * @param string|array $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereColumn($first, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::orWhereColumn($first, $operator, $second);
            }
         
            /**
             * Add a raw where clause to the query.
             *
             * @param string $sql
             * @param mixed $bindings
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function whereRaw($sql, $bindings = array(), $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
            }
         
            /**
             * Add a raw or where clause to the query.
             *
             * @param string $sql
             * @param mixed $bindings
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereRaw($sql, $bindings = array())
            {    
                return \Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
            }
         
            /**
             * Add a "where in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function whereIn($column, $values, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
            }
         
            /**
             * Add an "or where in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereIn($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereIn($column, $values);
            }
         
            /**
             * Add a "where not in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotIn($column, $values, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
            }
         
            /**
             * Add an "or where not in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotIn($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
            }
         
            /**
             * Add a "where null" clause to the query.
             *
             * @param string $column
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function whereNull($column, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
            }
         
            /**
             * Add an "or where null" clause to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNull($column)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNull($column);
            }
         
            /**
             * Add a "where not null" clause to the query.
             *
             * @param string $column
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotNull($column, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
            }
         
            /**
             * Add a where between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function whereBetween($column, $values, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean, $not);
            }
         
            /**
             * Add an or where between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereBetween($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereBetween($column, $values);
            }
         
            /**
             * Add a where not between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotBetween($column, $values, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNotBetween($column, $values, $boolean);
            }
         
            /**
             * Add an or where not between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotBetween($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNotBetween($column, $values);
            }
         
            /**
             * Add an "or where not null" clause to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotNull($column)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNotNull($column);
            }
         
            /**
             * Add a "where date" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereDate($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereDate($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where date" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param string $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereDate($column, $operator, $value)
            {    
                return \Illuminate\Database\Query\Builder::orWhereDate($column, $operator, $value);
            }
         
            /**
             * Add a "where time" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param int $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereTime($column, $operator, $value, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereTime($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where time" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param int $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereTime($column, $operator, $value)
            {    
                return \Illuminate\Database\Query\Builder::orWhereTime($column, $operator, $value);
            }
         
            /**
             * Add a "where day" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereDay($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereDay($column, $operator, $value, $boolean);
            }
         
            /**
             * Add a "where month" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereMonth($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereMonth($column, $operator, $value, $boolean);
            }
         
            /**
             * Add a "where year" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereYear($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereYear($column, $operator, $value, $boolean);
            }
         
            /**
             * Add a nested where statement to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNested($callback, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
            }
         
            /**
             * Create a new query instance for nested where condition.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function forNestedWhere()
            {    
                return \Illuminate\Database\Query\Builder::forNestedWhere();
            }
         
            /**
             * Add another query builder as a nested where to the query builder.
             *
             * @param \Illuminate\Database\Query\Builder|static $query
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function addNestedWhereQuery($query, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::addNestedWhereQuery($query, $boolean);
            }
         
            /**
             * Add an exists clause to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function whereExists($callback, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
            }
         
            /**
             * Add an or exists clause to the query.
             *
             * @param \Closure $callback
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereExists($callback, $not = false)
            {    
                return \Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
            }
         
            /**
             * Add a where not exists clause to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotExists($callback, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
            }
         
            /**
             * Add a where not exists clause to the query.
             *
             * @param \Closure $callback
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotExists($callback)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNotExists($callback);
            }
         
            /**
             * Add an exists clause to the query.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function addWhereExistsQuery($query, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::addWhereExistsQuery($query, $boolean, $not);
            }
         
            /**
             * Handles dynamic "where" clauses to the query.
             *
             * @param string $method
             * @param string $parameters
             * @return $this 
             * @static 
             */ 
            public static function dynamicWhere($method, $parameters)
            {    
                return \Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
            }
         
            /**
             * Add a "group by" clause to the query.
             *
             * @param array $groups
             * @return $this 
             * @static 
             */ 
            public static function groupBy($groups = null)
            {    
                return \Illuminate\Database\Query\Builder::groupBy($groups);
            }
         
            /**
             * Add a "having" clause to the query.
             *
             * @param string $column
             * @param string|null $operator
             * @param string|null $value
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function having($column, $operator = null, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::having($column, $operator, $value, $boolean);
            }
         
            /**
             * Add a "or having" clause to the query.
             *
             * @param string $column
             * @param string|null $operator
             * @param string|null $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orHaving($column, $operator = null, $value = null)
            {    
                return \Illuminate\Database\Query\Builder::orHaving($column, $operator, $value);
            }
         
            /**
             * Add a raw having clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function havingRaw($sql, $bindings = array(), $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
            }
         
            /**
             * Add a raw or having clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orHavingRaw($sql, $bindings = array())
            {    
                return \Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
            }
         
            /**
             * Add an "order by" clause to the query.
             *
             * @param string $column
             * @param string $direction
             * @return $this 
             * @static 
             */ 
            public static function orderBy($column, $direction = 'asc')
            {    
                return \Illuminate\Database\Query\Builder::orderBy($column, $direction);
            }
         
            /**
             * Add a descending "order by" clause to the query.
             *
             * @param string $column
             * @return $this 
             * @static 
             */ 
            public static function orderByDesc($column)
            {    
                return \Illuminate\Database\Query\Builder::orderByDesc($column);
            }
         
            /**
             * Add an "order by" clause for a timestamp to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function latest($column = 'created_at')
            {    
                return \Illuminate\Database\Query\Builder::latest($column);
            }
         
            /**
             * Add an "order by" clause for a timestamp to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function oldest($column = 'created_at')
            {    
                return \Illuminate\Database\Query\Builder::oldest($column);
            }
         
            /**
             * Put the query's results in random order.
             *
             * @param string $seed
             * @return $this 
             * @static 
             */ 
            public static function inRandomOrder($seed = '')
            {    
                return \Illuminate\Database\Query\Builder::inRandomOrder($seed);
            }
         
            /**
             * Add a raw "order by" clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @return $this 
             * @static 
             */ 
            public static function orderByRaw($sql, $bindings = array())
            {    
                return \Illuminate\Database\Query\Builder::orderByRaw($sql, $bindings);
            }
         
            /**
             * Alias to set the "offset" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function skip($value)
            {    
                return \Illuminate\Database\Query\Builder::skip($value);
            }
         
            /**
             * Set the "offset" value of the query.
             *
             * @param int $value
             * @return $this 
             * @static 
             */ 
            public static function offset($value)
            {    
                return \Illuminate\Database\Query\Builder::offset($value);
            }
         
            /**
             * Alias to set the "limit" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function take($value)
            {    
                return \Illuminate\Database\Query\Builder::take($value);
            }
         
            /**
             * Set the "limit" value of the query.
             *
             * @param int $value
             * @return $this 
             * @static 
             */ 
            public static function limit($value)
            {    
                return \Illuminate\Database\Query\Builder::limit($value);
            }
         
            /**
             * Set the limit and offset for a given page.
             *
             * @param int $page
             * @param int $perPage
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function forPage($page, $perPage = 15)
            {    
                return \Illuminate\Database\Query\Builder::forPage($page, $perPage);
            }
         
            /**
             * Constrain the query to the next "page" of results after a given ID.
             *
             * @param int $perPage
             * @param int $lastId
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
            {    
                return \Illuminate\Database\Query\Builder::forPageAfterId($perPage, $lastId, $column);
            }
         
            /**
             * Add a union statement to the query.
             *
             * @param \Illuminate\Database\Query\Builder|\Closure $query
             * @param bool $all
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function union($query, $all = false)
            {    
                return \Illuminate\Database\Query\Builder::union($query, $all);
            }
         
            /**
             * Add a union all statement to the query.
             *
             * @param \Illuminate\Database\Query\Builder|\Closure $query
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function unionAll($query)
            {    
                return \Illuminate\Database\Query\Builder::unionAll($query);
            }
         
            /**
             * Lock the selected rows in the table.
             *
             * @param string|bool $value
             * @return $this 
             * @static 
             */ 
            public static function lock($value = true)
            {    
                return \Illuminate\Database\Query\Builder::lock($value);
            }
         
            /**
             * Lock the selected rows in the table for updating.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function lockForUpdate()
            {    
                return \Illuminate\Database\Query\Builder::lockForUpdate();
            }
         
            /**
             * Share lock the selected rows in the table.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function sharedLock()
            {    
                return \Illuminate\Database\Query\Builder::sharedLock();
            }
         
            /**
             * Get the SQL representation of the query.
             *
             * @return string 
             * @static 
             */ 
            public static function toSql()
            {    
                return \Illuminate\Database\Query\Builder::toSql();
            }
         
            /**
             * Get the count of the total records for the paginator.
             *
             * @param array $columns
             * @return int 
             * @static 
             */ 
            public static function getCountForPagination($columns = array())
            {    
                return \Illuminate\Database\Query\Builder::getCountForPagination($columns);
            }
         
            /**
             * Concatenate values of a given column as a string.
             *
             * @param string $column
             * @param string $glue
             * @return string 
             * @static 
             */ 
            public static function implode($column, $glue = '')
            {    
                return \Illuminate\Database\Query\Builder::implode($column, $glue);
            }
         
            /**
             * Determine if any rows exist for the current query.
             *
             * @return bool 
             * @static 
             */ 
            public static function exists()
            {    
                return \Illuminate\Database\Query\Builder::exists();
            }
         
            /**
             * Retrieve the "count" result of the query.
             *
             * @param string $columns
             * @return int 
             * @static 
             */ 
            public static function count($columns = '*')
            {    
                return \Illuminate\Database\Query\Builder::count($columns);
            }
         
            /**
             * Retrieve the minimum value of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function min($column)
            {    
                return \Illuminate\Database\Query\Builder::min($column);
            }
         
            /**
             * Retrieve the maximum value of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function max($column)
            {    
                return \Illuminate\Database\Query\Builder::max($column);
            }
         
            /**
             * Retrieve the sum of the values of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function sum($column)
            {    
                return \Illuminate\Database\Query\Builder::sum($column);
            }
         
            /**
             * Retrieve the average of the values of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function avg($column)
            {    
                return \Illuminate\Database\Query\Builder::avg($column);
            }
         
            /**
             * Alias for the "avg" method.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function average($column)
            {    
                return \Illuminate\Database\Query\Builder::average($column);
            }
         
            /**
             * Execute an aggregate function on the database.
             *
             * @param string $function
             * @param array $columns
             * @return mixed 
             * @static 
             */ 
            public static function aggregate($function, $columns = array())
            {    
                return \Illuminate\Database\Query\Builder::aggregate($function, $columns);
            }
         
            /**
             * Execute a numeric aggregate function on the database.
             *
             * @param string $function
             * @param array $columns
             * @return float|int 
             * @static 
             */ 
            public static function numericAggregate($function, $columns = array())
            {    
                return \Illuminate\Database\Query\Builder::numericAggregate($function, $columns);
            }
         
            /**
             * Insert a new record into the database.
             *
             * @param array $values
             * @return bool 
             * @static 
             */ 
            public static function insert($values)
            {    
                return \Illuminate\Database\Query\Builder::insert($values);
            }
         
            /**
             * Insert a new record and get the value of the primary key.
             *
             * @param array $values
             * @param string|null $sequence
             * @return int 
             * @static 
             */ 
            public static function insertGetId($values, $sequence = null)
            {    
                return \Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
            }
         
            /**
             * Insert or update a record matching the attributes, and fill it with values.
             *
             * @param array $attributes
             * @param array $values
             * @return bool 
             * @static 
             */ 
            public static function updateOrInsert($attributes, $values = array())
            {    
                return \Illuminate\Database\Query\Builder::updateOrInsert($attributes, $values);
            }
         
            /**
             * Run a truncate statement on the table.
             *
             * @return void 
             * @static 
             */ 
            public static function truncate()
            {    
                \Illuminate\Database\Query\Builder::truncate();
            }
         
            /**
             * Create a raw database expression.
             *
             * @param mixed $value
             * @return \Illuminate\Database\Query\Expression 
             * @static 
             */ 
            public static function raw($value)
            {    
                return \Illuminate\Database\Query\Builder::raw($value);
            }
         
            /**
             * Get the current query value bindings in a flattened array.
             *
             * @return array 
             * @static 
             */ 
            public static function getBindings()
            {    
                return \Illuminate\Database\Query\Builder::getBindings();
            }
         
            /**
             * Get the raw array of bindings.
             *
             * @return array 
             * @static 
             */ 
            public static function getRawBindings()
            {    
                return \Illuminate\Database\Query\Builder::getRawBindings();
            }
         
            /**
             * Set the bindings on the query builder.
             *
             * @param array $bindings
             * @param string $type
             * @return $this 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function setBindings($bindings, $type = 'where')
            {    
                return \Illuminate\Database\Query\Builder::setBindings($bindings, $type);
            }
         
            /**
             * Add a binding to the query.
             *
             * @param mixed $value
             * @param string $type
             * @return $this 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function addBinding($value, $type = 'where')
            {    
                return \Illuminate\Database\Query\Builder::addBinding($value, $type);
            }
         
            /**
             * Merge an array of bindings into our bindings.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @return $this 
             * @static 
             */ 
            public static function mergeBindings($query)
            {    
                return \Illuminate\Database\Query\Builder::mergeBindings($query);
            }
         
            /**
             * Get the database query processor instance.
             *
             * @return \Illuminate\Database\Query\Processors\Processor 
             * @static 
             */ 
            public static function getProcessor()
            {    
                return \Illuminate\Database\Query\Builder::getProcessor();
            }
         
            /**
             * Get the query grammar instance.
             *
             * @return \Illuminate\Database\Query\Grammars\Grammar 
             * @static 
             */ 
            public static function getGrammar()
            {    
                return \Illuminate\Database\Query\Builder::getGrammar();
            }
         
            /**
             * Use the write pdo for query.
             *
             * @return $this 
             * @static 
             */ 
            public static function useWritePdo()
            {    
                return \Illuminate\Database\Query\Builder::useWritePdo();
            }
         
            /**
             * Clone the query without the given properties.
             *
             * @param array $properties
             * @return static 
             * @static 
             */ 
            public static function cloneWithout($properties)
            {    
                return \Illuminate\Database\Query\Builder::cloneWithout($properties);
            }
         
            /**
             * Clone the query without the given bindings.
             *
             * @param array $except
             * @return static 
             * @static 
             */ 
            public static function cloneWithoutBindings($except)
            {    
                return \Illuminate\Database\Query\Builder::cloneWithoutBindings($except);
            }
         
            /**
             * Register a custom macro.
             *
             * @param string $name
             * @param object|callable $macro
             * @return void 
             * @static 
             */ 
            public static function macro($name, $macro)
            {    
                \Illuminate\Database\Query\Builder::macro($name, $macro);
            }
         
            /**
             * Mix another object into the class.
             *
             * @param object $mixin
             * @return void 
             * @static 
             */ 
            public static function mixin($mixin)
            {    
                \Illuminate\Database\Query\Builder::mixin($mixin);
            }
         
            /**
             * Checks if macro is registered.
             *
             * @param string $name
             * @return bool 
             * @static 
             */ 
            public static function hasMacro($name)
            {    
                return \Illuminate\Database\Query\Builder::hasMacro($name);
            }
         
            /**
             * Dynamically handle calls to the class.
             *
             * @param string $method
             * @param array $parameters
             * @return mixed 
             * @throws \BadMethodCallException
             * @static 
             */ 
            public static function macroCall($method, $parameters)
            {    
                return \Illuminate\Database\Query\Builder::macroCall($method, $parameters);
            }
        }

    class Event extends \Illuminate\Support\Facades\Event {}

    class File extends \Illuminate\Support\Facades\File {}

    class Gate extends \Illuminate\Support\Facades\Gate {}

    class Hash extends \Illuminate\Support\Facades\Hash {}

    class Lang extends \Illuminate\Support\Facades\Lang {}

    class Log extends \Illuminate\Support\Facades\Log {}

    class Mail extends \Illuminate\Support\Facades\Mail {}

    class Notification extends \Illuminate\Support\Facades\Notification {}

    class Password extends \Illuminate\Support\Facades\Password {}

    class Queue extends \Illuminate\Support\Facades\Queue {}

    class Redirect extends \Illuminate\Support\Facades\Redirect {}

    class Request extends \Illuminate\Support\Facades\Request {}

    class Response extends \Illuminate\Support\Facades\Response {}

    class Route extends \Illuminate\Support\Facades\Route {}

    class Schema extends \Illuminate\Support\Facades\Schema {}

    class Session extends \Illuminate\Support\Facades\Session {}

    class Storage extends \Illuminate\Support\Facades\Storage {}

    class URL extends \Illuminate\Support\Facades\URL {}

    class Validator extends \Illuminate\Support\Facades\Validator {}

    class View extends \Illuminate\Support\Facades\View {}

    class Carbon extends \Carbon\Carbon {}

    class Breadcrumbs extends \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs {}

    class Image extends \Intervention\Image\Facades\Image {}

    class Socialite extends \Laravel\Socialite\Facades\Socialite {}

    class Countries extends \PragmaRX\Countries\Facade {}

    class JsValidator extends \Proengsoft\JsValidation\Facades\JsValidatorFacade {}

    class Facebook extends \SammyK\LaravelFacebookSdk\FacebookFacade {}

    class Form extends \Collective\Html\FormFacade {}

    class Html extends \Collective\Html\HtmlFacade {}

    class Excel extends \Maatwebsite\Excel\Facades\Excel {}

    class DataTables extends \Yajra\DataTables\Facades\DataTables {}

    class Assets extends \Botble\Assets\Facades\AssetsFacade {}

    class Setting extends \Botble\Setting\Facades\SettingFacade {}

    class MetaBox extends \Botble\Base\Facades\MetaBoxFacade {}

    class Action extends \Botble\Base\Facades\ActionFacade {}

    class Filter extends \Botble\Base\Facades\FilterFacade {}

    class EmailHandler extends \Botble\Base\Facades\EmailHandlerFacade {}

    class AdminBar extends \Botble\Base\Facades\AdminBarFacade {}

    class PageTitle extends \Botble\Base\Facades\PageTitleFacade {}

    class AdminBreadcrumb extends \Botble\Base\Facades\AdminBreadcrumbFacade {}

    class DashboardMenu extends \Botble\Base\Facades\DashboardMenuFacade {}

    class SiteMapManager extends \Botble\Base\Facades\SiteMapManagerFacade {}

    class JsonFeedManager extends \Botble\Base\Facades\JsonFeedManagerFacade {}

    class Gallery extends \Botble\Gallery\Facades\GalleryFacade {}

    class Language extends \Botble\Language\Facades\LanguageFacade {}

    class Analytics extends \Botble\Analytics\Facades\AnalyticsFacade {}

    class AuditLog extends \Botble\AuditLog\Facades\AuditLogFacade {}

    class LogViewer extends \Botble\LogViewer\Facades\LogViewerFacade {}

    class Note extends \Botble\Note\Facades\NoteFacade {}

    class Captcha extends \Botble\Captcha\Facades\CaptchaFacade {}

    class RvMedia extends \Botble\Media\Facades\RvMediaFacade {}

    class Menu extends \Botble\Menu\Facades\MenuFacade {}

    class SeoHelper extends \Botble\SeoHelper\Facades\SeoHelperFacade {}

    class Theme extends \Botble\Theme\Facades\ThemeFacade {}

    class ThemeOption extends \Botble\Theme\Facades\ThemeOptionFacade {}

    class ThemeManager extends \Botble\Theme\Facades\ManagerFacade {}

    class Widget extends \Botble\Widget\Facades\WidgetFacade {}

    class AsyncWidget extends \Botble\Widget\Facades\AsyncFacade {}

    class WidgetGroup extends \Botble\Widget\Facades\WidgetGroupFacade {}

    class AclManager extends \Botble\ACL\Facades\AclManagerFacade {}
 
}



