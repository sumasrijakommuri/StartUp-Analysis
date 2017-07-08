import sys
from sklearn.cluster import KMeans
import numpy as np
import csv
import warnings

class startUpPredictions(object):
    def __init__(self):
        self.trainDataFile = "C:/xampp/htdocs/xampp/train.csv"
        self.trainLabelsFile = "C:/xampp/htdocs/xampp/trainoutput.csv"
        self.testDataFile = "C:/Users/rasag/Desktop/srija/test.csv"
        self.testLabelsFile = "C:/Users/rasag/Desktop/srija/testoutput.csv"
        self.categoryFile = "C:/xampp/htdocs/xampp/category.csv"
        self.stateFile = "C:/xampp/htdocs/xampp/state.csv"
        self.featuresFile = "C:/xampp/htdocs/xampp/finalData.csv"


    def getDict(self, filename):
        data_file = file(filename, 'r')
        data = csv.reader(data_file, delimiter = ',')
        
        categoryDict = {}
        for d in data:
            categoryDict[d[0]] = d[1]
        
        #print 'dict created.'
        return categoryDict


    def readData(self, filename):
        data_file = file(filename,'r')
        data = csv.reader(data_file,delimiter =',')
        values = []
        for row in data:
            value = []
            for i in range(9):
                value.append(float(row[i]))
            values.append(value)
        #print 'Data values reading completed ',filename
        return values


    def readLabels(self, filename):
        data_file = file(filename,'r')
        data = csv.reader(data_file,delimiter=',')
        values = []
        for row in data:
            values.append(row[0])
        #print 'Data labels reading completes ',filename
        return values

    def getClassifier(self):
        self.category = self.getDict(self.categoryFile)
        self.state = self.getDict(self.stateFile)
        self.trainData = self.readData(self.trainDataFile)
        self.trainLabels = self.readLabels(self.trainLabelsFile)
        #self.testData = self.readData(self.testDataFile)
        #self.testLabels = self.readLabels(self.testLabelsFile)
        
        self.classifier = KMeans(n_clusters = 10, random_state = 0)

        X = np.asarray(self.trainData)
        #Y = np.asarray(self.trainLabels, dtype="S6")
        self.classifier.fit(X)
        for i in self.classifier.labels_:
            print i
        #print self.classifier.labels_
        return self.classifier

    def getAccuracy(self,actual_labels,predicted_labels):
        count = 0
        for i in range(len(actual_labels)):
            if(actual_labels[i] == predicted_labels[i]):
                count += 1
        accuracy = count * 100 / len(actual_labels)
        return accuracy

    def predictData(self, data):
       #data = [0,1,1,0,1,5,0.89,0.75,0]
        prediction = self.classifier.predict(data)
        print prediction

        ##accuracy
        #print "Accuracy: ", self.getAccuracy(self.testLabels, predictions)

    def readFeaturesFile(self):
        readFile = open(self.featuresFile, "r")
        features = readFile.read().split("\n")
        features.pop(0)
        features.pop()
        features.pop()
        trainingFeatures = []

        docIds = []
        self.categoryD = self.getDict(self.categoryFile)
        self.stateD = self.getDict(self.stateFile)
        

        for feature in features:
            f = feature.split(",")
            docIds.append(f[0])
            input = []
            #print f[1]
            input.append(self.categoryD[f[1]])
            for val in f[2:6]:
                input.append(val)
            input.append(self.stateD[f[6]])
            for val in f[7:]:
                input.append(val)
            trainingFeatures.append(input)
            
        self.trainingInput = trainingFeatures
        self.docIds = docIds
        #print self.trainingInput[0]

    def trainClassifier(self):
        self.clf = KMeans(n_clusters= 40 , random_state=0)
        self.clf.fit(self.trainingInput)
        d = {}
        labels = self.clf.labels_
        for i in range(len(self.docIds)):
            d[self.docIds[i]] = labels[i]

        #print self.clf.cluster_centers_

        self.clusterLabels = d

    def exportcluster(self):
        with open('cluster.csv', 'wb') as csv_file:
            writer = csv.writer(csv_file)
            for key,value in self.clusterLabels.items():
                writer.writerow([key, value])

    def predictInput(self, test):
        #test = [self.categoryD['news'], 500, 10, 30, 21, self.stateD['CA'], 1, 1, 200]
        print self.clf.predict(test)[0]


if __name__ == "__main__":
    st = startUpPredictions()
    #classifier = st.getClassifier()
    st.readFeaturesFile()
    st.trainClassifier()
        
    #st.exportcluster()



    ## [self.categoryD['news'], 500, 10, 30, 21, self.stateD['CA'], 1, 1, 200]
    data = []
    for x in range(1,len(sys.argv)):
        data.append(sys.argv[x])

    with warnings.catch_warnings():
        warnings.simplefilter("ignore")
    
        st.predictInput(data)
        
