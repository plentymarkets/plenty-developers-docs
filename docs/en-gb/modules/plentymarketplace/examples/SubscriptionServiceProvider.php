{
    getApplication()->register(HelloSubWorldRouteServiceProvider::class);
                $this->getApplication()->register(ServiceProviderForFreeComponenents::class);

                // get the Subscription Service
                $this->subscriptionInfoService = pluginApp(SubscriptionInformationServiceContract::class);

            // check if the subscription has been paid
            if ( $this->subscriptionInfoService->isPaid('HelloSubWorld') )
            {
                $this->getApplication()->register(ServiceProviderForPremiumComponenents::class);
            }
        }
    }
}